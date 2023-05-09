@extends('layouts.app')

@section('content')
<section class="container">
    <h1 class="text-center my-5 name-section">Сколько стоит ремонт телефона?</h1>
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
@endsection