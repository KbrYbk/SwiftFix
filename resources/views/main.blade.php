@extends('layouts.app')

@section('content')
<!-- _________________________________Slogan_____________________________________________________ -->
<section class="container-fluid">
    <div class="slogan mb-5 row justify-content-center align-items-center">
        <div class="col">
            <img src="{{url('/img')}}/pixel.png" alt="pixel7" class="pixel_on_slogan">
        </div>
        <div class="col">
            <h2 class="mb-4">Ремонт телефонов любой сложности</h2>
            <h2>Восстановите свою мобильную жизнь в мгновение ока!</h2>
        </div>
    </div>
</section>
<!-- _________________________________Brand plates_______________________________________________ -->
<section class="container my-4">
    <h1 class="text-center my-5 name-section">Выберите модель вашего устройства</h1>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
        @foreach($brand as $bp)
        <div class="col mb-4">
            <div class="card cards-brands">
                <img src="{{ asset('images/' . $bp->img) }}" alt="logo_brands" class="card-img-top">
                <div class="card-body  d-flex align-items-center justify-content-center">
                    <h5 class="card-title-brand text-center">{{$bp->name}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- _________________________________Callback Form______________________________________________ -->
<section class="container my-4 ">
    <h1 class="text-center name-section mt-4">Нет подходящего бренда?</h1>
    <form action="{{ route('callback') }}" method="POST" class="mt-5 p-5 main-form">
        <h1 class="text-center mb-4">Напишите модель вашего устройства,<br>мы вам обязательно позвоним</h1>
        @csrf
        <div class="row align-items-center">
            <div class="col">
                <input type="text" name="device_model" id="device_model" class="form-control" placeholder="Модель вашего устройства" required>
                @error('device_model')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="text" name="name" id="name" class="form-control" placeholder="Ваше имя" required>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder=" Ваш номер телефона" required>
                @error('phone_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-outline-secondary">Расчитать стоимость</button>
            </div>
        </div>
    </form>
    <div id="popup" class="popup">
        <div class="popup-content">
            <h3>Отлично!</h3>
            <p>Перезвоним вам в течение получаса.</p>
        </div>
    </div>
</section>
<!-- _________________________________Additional services______________________________________________ -->
<section class="container my-4">
    <h1 class="text-center name-section my-5">Полная защита вашего телефона</h1>
    <div class="row additional_services align-items-center g-0">
        <div class="col-6"><img src="{{url('img/')}}/AdditionalServices.png" class="AdditionalServices_img w-100" alt=""></div>
        <div class="col-6">
            <h1 class="text-center name-section mb-5 additional_services_name">Спасём от повторного <br>посещения</h1>
            <h4 class="additional_services_text">После ремонта в нашем сервисе установим на ваше устройство защитное стекло в подарок</h4>
        </div>
    </div>
</section>
<!-- ______________________________Review__________________________________________ -->
<section class="container my-4" id="review">
    <h1 class="text-center name-section my-5">Отзывы наших клиентов</h1>
    <div class="row row-cols-2">
        <div class="col">
            <div class="card card_rev p-4 h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{url('img/review')}}/Gosling.png" alt="review_avatar">
                        </div>
                        <div class="col">
                            <h5 class="card-title review-name">Гослинг</h5>
                            <p class="card-text review-text">Реально классно спасибо за быструю работу!!!1!</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex card-footer-review">
                    <div class="rating-result me-auto">
                        <span class="active"></span>
                        <span class="active"></span>
                        <span class="active"></span>
                        <span class="active"></span>
                        <span class="active"></span>
                    </div>
                    <div class="date ms-auto mt-4">
                        <p>15.03.2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card_rev p-4 h-100">
                <div class="card-body card-body-rev">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{url('img/review')}}/Derden.png" alt="review_avatar">
                        </div>
                        <div class="col">
                            <h5 class="card-title review-name">Кто</h5>
                            <p class="card-text review-text">Выполнили работу быстро, но мастер сказал что я небережно пользуюсь своим телефоном.</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex card-footer-review">
                    <div class="rating-result me-auto">
                        <span class="active"></span>
                        <span class="active"></span>
                        <span class="active"></span>
                        <span class="active"></span>
                        <span></span>
                    </div>
                    <div class="date ms-auto mt-4">
                        <p>27.02.2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <p class="mt-5 more_review">Ещё отзывы</p>
</section>
@endsection