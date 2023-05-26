@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-11 mt-4">
            <div class="card card_rev p-4 h-100">
                <div class="card-body card-body-rev ">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3 col-xl-2 mb-3">
                            <img src="{{ asset('avatars/' . Auth::user()->avatar) }}" class=" avatar" alt="Аватарка пользователя">
                            <!-- <img src="{{url('img/review')}}/Derden.png" class="w-100" alt="review_avatar w-100"> -->
                        </div>
                        <div class="col">
                            @if (Auth::check())
                            <h5 class="card-title review-name mb-3">Добро пожаловать, {{ $user->name }}!</h5>
                            <p class="card-text review-text">Ваш электронный адрес: {{ $user->email }}</p>
                            <p class="card-text review-name mb-3">Загрузить фото пользователя:</p>
                            <!-- форма для смены аватарки -->
                            <form action="{{ route('avatar.upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="formFile" name="avatar">
                                </div>
                                <button type="submit" class="btn btn-outline-secondary mt-3">Загрузить аватарку</button>
                            </form>
                            <!-- форма для отзыва -->
                            <p class="card-text review-name my-3">Оставте о нас отзыв:</p>

                            <form action="{{ route('reviews.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="content" id="content" required></textarea>
                                </div>
                                <div class="rating mb-3">
                                    <input type="radio" id="star5" name="rating" value="5">
                                    <label for="star5" title="5 звезд"></label>
                                    <input type="radio" id="star4" name="rating" value="4">
                                    <label for="star4" title="4 звезды"></label>
                                    <input type="radio" id="star3" name="rating" value="3">
                                    <label for="star3" title="3 звезды"></label>
                                    <input type="radio" id="star2" name="rating" value="2">
                                    <label for="star2" title="2 звезды"></label>
                                    <input type="radio" id="star1" name="rating" value="1">
                                    <label for="star1" title="1 звезда"></label>
                                </div><br>
                                @php
                                $hasReview = Auth::user()->reviews()->exists();
                                @endphp

                                <button type="submit" class="btn btn-outline-secondary mt-3" {{ $hasReview ? 'disabled' : '' }}>
                                    Отправить отзыв</button>
                                <!-- <button type="submit" class="btn btn-outline-secondary mt-3">Отправить отзыв</button> -->
                            </form>
                            @else
                            <p>Вы не вошли на сайт.</p>
                            @endif
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection