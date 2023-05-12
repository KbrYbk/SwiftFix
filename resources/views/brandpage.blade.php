@extends('layouts.app')

@section('content')
@foreach($phone as $ph)
<section class="slogan-container" style="background-color: {{$ph->color}};">
    @endforeach
    <div class="container">
        <div class="slogan mb-5 row align-items-center">
            @foreach($phone as $ph)
            <div class="col-lg-6 order-lg-2" style="color: {{$ph->text}};">
                <h2 class="mb-4 slogan-top">Ремонт смартфонов {{$ph->name}}</h2>
                <h2 class="slogan-text">Восстановите свою мобильную жизнь в мгновение ока!</h2>
            </div>
            <div class="col-lg-6 order-lg-1 text-center">
                <img src="{{ asset('images/' . $ph->img_slogan) }}" alt="{{$ph->name}}" class="pixel_on_slogan w-100">
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="container">
    <h1 class="text-center my-5 name-section">Сколько стоит ремонт телефона?</h1>repair
    <table class="table table-borderless table-striped-columns align-middle">
        <thead>
            <tr class="table-secondary">
                <th scope="col" class="text-center col-8">Услуга</th>
                <th scope="col" class="col-2">Цена</th>
                <th scope="col" class="text-center col-1 mobile-screen">Заказать</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $sv)
            <tr class="table-primary">
                <th scope="row" class="col-8">{{$sv->name}}</th>
                <td class="col-2">{{$sv->price}}</td>
                <td class="col-1 mobile-screen"><button type="submit" class="btn btn-outline-secondary">Расчитать стоимость</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
<section class="container my-4 ">
    <h1 class="text-center name-section mt-4">Нет интересующей вас услуги?</h1>
    <form action="{{ route('callback') }}" method="POST" class="mt-5 p-5 main-form">
        <h1 class="text-center mb-4 name-block">Заполните форму и мы вам перезвоним</h1>
        @csrf
        <div class="row align-items-center">
            <div class="col-12 col-lg mb-3">
                <input type="text" name="device_model" id="device_model" class="form-control" placeholder="Модель вашего устройства" required>
                @error('device_model')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-lg mb-3">
                <input type="text" name="name" id="name" class="form-control" placeholder="Ваше имя" required>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-lg mb-3">
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder=" Ваш номер телефона" required>
                @error('phone_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-lg-2 mb-3 text-center">
                <button type="submit" class="btn btn-outline-secondary">Расчитать стоимость</button>
            </div>
        </div>
    </form>
</section>
@endsection