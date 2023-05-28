@extends('layouts.app')

@section('content')
<!-- _________________________________Slogan_____________________________________________________ -->
<section class="slogan-container">
    <div class="container">
        <div class="slogan mb-5 row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <h2 class="mb-4 slogan-top">Ремонт телефонов любой сложности</h2>
                <h2 class="slogan-text">Восстановите свою мобильную жизнь в мгновение ока!</h2>
            </div>
            <div class="col-lg-6 order-lg-1">
                <img src="{{url('img/')}}/Pixel.png" alt="pixel7" class="pixel_on_slogan w-100">
            </div>
        </div>

    </div>
</section>
<!-- _________________________________Brand plates_______________________________________________ -->
<section class="container my-4">
    <h1 class="text-center my-5 name-section">Выберите модель вашего устройства</h1>
    <nav class="menu d-flex">
        @foreach($brand as $bp)
        <div class="nav-scroller__item">
            <a href="{{url('/brandpage')}}/{{$bp->id}}" class="link">
                <div class="card cards-brands">
                    <img src="{{ asset('images/' . $bp->img) }}" alt="logo_brands" class="card-img-top">
                    <div class="card-body  d-flex align-items-center justify-content-center">
                        <h5 class="card-title-brand text-center">{{$bp->name}}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </nav>
</section>
<!-- _________________________________Callback Form______________________________________________ -->
<section class="container my-4 ">
    <h1 class="text-center name-section mt-4">Нет подходящего бренда?</h1>
    <form action="{{ route('callback') }}" method="POST" class="mt-5 p-5 main-form" name="form1">
        <h1 class="text-center mb-4 name-block">Напишите модель вашего устройства,<br>мы вам обязательно позвоним</h1>
        @csrf
        <div class="row align-items-center">
            <div class="col-12 col-lg mb-3">
                <input type="text" name="device_model" id="device_model" class="form-control" placeholder="Модель вашего устройства" required>

            </div>
            <div class="col-12 col-lg mb-3">
                <input type="text" name="name" id="name" class="form-control" placeholder="Ваше имя" required>

            </div>
            <div class="col-12 col-lg mb-3">
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder=" Ваш номер телефона" required>
    
            </div>
            <div class="col-12 col-lg-2 mb-3 text-center">
                <button type="submit" class="btn btn-outline-secondary">Отправить</button>
            </div>
        </div>
    </form>
</section>
<!-- _________________________________Additional services______________________________________________ -->
<section class="container my-4">
    <h1 class="text-center name-section my-5">Полная защита вашего телефона</h1>
    <div class="row additional_services align-items-center g-0">
        <div class="col-lg-6 order-lg-2 text-center">
            <h1 class="name-section mb-5 additional_services_name">Спасём от повторного <br>посещения</h1>
            <h4 class="additional_services_text">После ремонта в нашем сервисе установим на ваше устройство защитное стекло в подарок</h4>
        </div>
        <div class="col-lg-6 order-lg-1">
            <img src="{{url('img/')}}/AdditionalServices.png" class="AdditionalServices_img w-100" alt="">
        </div>
    </div>
</section>
<!-- ______________________________Review__________________________________________ -->
<section class="container my-4" id="review">
    <h1 class="text-center name-section my-5">Отзывы наших клиентов</h1>


    <div class="row row-cols-1 row-cols-lg-2" id="reviewsContainer">
        @php
        $visibleReviews = 2; // Количество отзывов, которые видны изначально
        @endphp
        @foreach ($reviews as $index => $review)
        <div class="col mb-4 reviewCard" style="{{ $index >= $visibleReviews ? 'display:none' : '' }}">
            <div class="card card_rev p-4 h-100">
                <div class="card-body card-body-rev">
                    <div class="row">
                        <div class="col-12 col-md-4 mb-3">
                            <img src="{{ asset('avatars/' . $review->user->avatar) }}" class=" avatar" alt="Аватарка пользователя">
                        </div>
                        <div class="col">
                            <h5 class="card-title review-name mb-3">{{ $review->user->name }}</h5>
                            <p class="card-text review-text">{{ $review->content }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex card-footer-review">
                    <div class="rating-result d-flex me-auto">
                        @for ($i = 1; $i <= 5; $i++) @if ($i <=$review->rating)
                            <span class="star-filled">★</span>
                            @else
                            <span class="star-empty">★</span>
                            @endif
                            @endfor
                    </div>
                    <div class="date ms-auto mt-4">
                        <p>{{ $review->created_at->format('d.m.Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-3">
        <button type="button" class="btn btn-outline-secondary" id="toggleReviewsButton">
            @if (count($reviews) > $visibleReviews)
            Ещё отзывы
            @else
            Скрыть отзывы
            @endif
        </button>
    </div>

    <script>
        $(document).ready(function() {
            var $reviewsContainer = $('#reviewsContainer');
            var $toggleReviewsButton = $('#toggleReviewsButton');
            var $reviewCards = $reviewsContainer.find('.reviewCard');
            var visibleReviews = <?php echo $visibleReviews; ?>;
            var totalReviews = <?php echo count($reviews); ?>;
            var reviewsHidden = true;

            $toggleReviewsButton.on('click', function() {
                for (var i = visibleReviews; i < totalReviews; i++) {
                    $reviewCards.eq(i).toggle(reviewsHidden);
                }

                $toggleReviewsButton.text(reviewsHidden ? 'Скрыть отзывы' : 'Ещё отзывы');
                reviewsHidden = !reviewsHidden;
            });
        });
    </script>
    @endsection