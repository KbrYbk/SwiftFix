@extends('layouts.app')

@section('content')
<div class="container pt-4">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card main-form">
                <div class="card-header">Добавление новой услуги</div>
                <div class="card-body">
                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">Название услуги</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="price">Цена</label>
                            <input type="text" name="price" class="form-control" required>
                        </div>

                        <h6 class="text-danger">*При добавлении услуги не забудьте обновить цену у бренда</h6>
                        <button type="submit" class="btn btn-outline-secondary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection