@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Админ панель</h1>

    <!-- Блок с заявками на обратный звонок -->
    <h4 class="text-center my-4">Заявки на обратный звонок</h4>
    @if ($callback->isEmpty())
    <h4 class="text-center fst-italic my-4">Заявок на обратный звонок нет</h4>
    @else
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5">
        @foreach($callback as $ph)
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title">{{$ph->name}}</h3>
                    <h4 class="card-text">{{$ph->phone_number}}</h4>
                    <p class="card-text">{{$ph->device_model}}</p>
                </div>
                <div class="card-footer">
                    <a href="{{url('/admin/callback/delete/')}}/{{$ph->id}}" class="btn btn-outline-secondary">Удалить заявку</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <!-- Блок с брендами -->
    <h4 class="text-center my-4">Бренды</h4>
    <div class="menu d-flex">
        @foreach($phone as $ph)
        <div class="nav-scroller__item">
            <div class="card cards-brands h-100">
                <img src="{{ asset('images/' . $ph->img) }}" alt="logo_brands" class="card-img-top">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <h5 class="card-title-brand text-center">{{$ph->name}}</h5>
                </div>
                <div class="card-footer">
                    <a href="{{url('/admin/brand/delete/')}}/{{$ph->id}}" class="btn btn-outline-secondary">Удалить бренд</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a href="{{url('/brands/create')}}" class="btn btn-outline-secondary mt-3">Добавить бренд</a>
 
    <!-- Блок с услугами -->
    <h4 class="text-center my-4">Услуги</h4>
    <div class="row row-cols-5">
        <table class="table table-borderless table-striped-columns align-middle">
            <thead>
                <tr class="table-secondary">
                    <th scope="col" class="text-center col-8">Услуга</th>
                    <th scope="col" class="col-2">Цена</th>
                    <th scope="col" class="col-1">Действие</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $sv)
                <tr class="table-primary">
                    <th scope="row" class="col-8">{{$sv->name}}</th>
                    <td class="col-2">{{$sv->price}}</td>
                    <td class="col-1"><a href="{{url('/admin/services/delete')}}/{{$sv->id}}" class="btn btn-outline-secondary">Удалить</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{url('/services/create')}}" class="btn btn-outline-secondary">Добавить услугу</a>

</div>
@endsection