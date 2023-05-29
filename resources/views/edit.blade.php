@extends('layouts.app')

@section('content')
<section class="container my-4">
    <h1 class="text-center">Обвновление информации бренда: {{ $brand->name }}</h1>
    <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="col-xl-8 my-3">
                <div class="card main-form">
                    <div class="card-header">{{ $brand->name }}</div>
                    <div class="card-body">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="name">Название бренда</label>
                            <input type="text" name="name" class="form-control" value="{{ $brand->name }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="formFile" class="form-label">Изображение бренда</label>
                            <input class="form-control" name="img" type="file" id="formFile">
                        </div>

                        <div class="form-group mb-3">
                            <label for="formFile" class="form-label">Изображение телефона на отдельной странице бренда</label>
                            <input class="form-control" name="img_slogan" type="file" id="formFile">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleColorInput" class="form-label">Выберите цвет фона на отдельной странице бренда:</label>
                            <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="{{ $brand->color }}" title="Choose your color">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleColorInput" class="form-label">Выберите цвет текста на отдельной странице бренда:</label>
                            <input type="color" name="text" class="form-control form-control-color" id="exampleColorInput" value="{{ $brand->text }}" title="Choose your color">
                        </div>

                    </div>
                </div>
                <!-- таблица -->
                <table class="table table-borderless table-striped-columns align-middle mt-3">
                    <thead>
                        <tr class="table-secondary">
                            <th scope="col" class="text-center col-8">Услуга</th>
                            <th scope="col" class="col-2">Цена</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $sv)
                        <tr class="table-primary">
                            <th scope="row" class="col-8">{{ $sv->name }}</th>
                            <td class="col-2">
                                @php
                                $servicePrice = $sv->price;
                                $brandServicePrice = $brandServicePrices->where('services_id', $sv->id)->first();
                                $price = $brandServicePrice ? $brandServicePrice->price : $servicePrice;
                                @endphp
                                <input type="number" name="prices[{{ $sv->id }}]" class="form-control" placeholder="Введите цену" value="{{ $price }}">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-outline-secondary">Обновить</button>
            </div>
        </div>
    </form>
</section>
@endsection