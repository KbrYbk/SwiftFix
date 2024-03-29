@extends('layouts.app')

@section('content')
<section class="slogan-container" style="background-color: {{$brand->color}};">
    <div class="container">
        <div class="slogan mb-5 row align-items-center">
            <div class="col-lg-6 order-lg-2" style="color: {{$brand->text}};">
                <h2 class="mb-4 slogan-top">Ремонт смартфонов {{$brand->name}}</h2>
                <h2 class="slogan-text">Восстановите свою мобильную жизнь в мгновение ока!</h2>
            </div>
            <div class="col-lg-6 order-lg-1 text-center">
                <img src="{{ asset('images/' . $brand->img_slogan) }}" alt="{{$brand->name}}" class="pixel_on_slogan mx-auto">
            </div>
        </div>
    </div>
</section>
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
            @foreach($brandPrices as $sv)
            <tr class="table-primary">
                <th scope="row" class="col-8">{{$sv->name}}</th>
                <td class="col-2">от {{$sv->pivot->price}} руб.</td>
                <td class="col-1 mobile-screen">
                    <button onclick="show_popap('modal-1')" type="submit" class="btn btn-outline-secondary">Записаться</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
<div class="overlay" id="modal-1">
    <div class="flex-popap">
        <div class="popap">
            <span class="close_popap" onclick="myFunction()">Закрыть</span>
            <form action="{{ route('callback') }}" method="POST" class="mt-5 p-5 main-form" name="form1">
                <h1 class="text-center mb-4 name-block">Записаться на ремонт</h1>
                @csrf
                <div class="row align-items-center">
                    <div class="col-12 col-lg mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ваше имя" required>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3">
                        <input type="text" name="device_model" id="device_model" class="form-control" placeholder="Модель вашего устройства" required value="{{$brand->name}}">
                        @error('device_model')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 col-lg mb-3">
                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder=" Ваш номер телефона" required>
                        @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 text-center my-3">
                        <input class="form-check-input" type="checkbox" value="" id="agreementCheckbox" required>
                        <label class="ms-2">Я принимаю <a href="{{route('agreement')}}" class="link-primary">условия пользовательского соглашения</a> и согласен на <a href="{{route('personalData')}}" class="link-primary">обработку персональных данных</a></label>
                    </div>
                    <!-- поле с выбором -->
                    <!-- <div class="col-12 mb-3">
                        <select class="form-select" name="service_id" aria-label="Что случилось с телефоном?">
                            <option selected>{{$sv->name}}</option>
                            @foreach($brandPrices as $sv)
                            <option value="{{$sv->id}}">{{$sv->name}}</option>
                            @endforeach
                        </select>
                    </div> -->
                    <div class="col-12 mb-3 text-center">
                        <button type="submit" class="btn btn-outline-secondary">Записаться</button>
                    </div>
                </div>
            </form>
            <div class="overlay" id="modal-2">
                <div class="flex-popap">
                    <div class="popap popap-success d-flex align-items-center justify-content-center">
                        <span class="close_popap" onclick="myFunction()">Закрыть</span>
                        <h1 class="text-center mb-4 name-block">Отлично! <br>
                            Перезвоним вам в течении получаса</h1>
                    </div>
                </div>
            </div>
            <h1 class="text-center mb-4 name-block">Или напишите нам в месенджер</h1>
            <div class="social_media d-flex w-100 mb-5 text-center">
                <a href="https://t.me/SwiftFixOmsk" target="_blank" class="social_media_icon social_media_icon_how">
                    <svg class="icons" viewBox="0 0 44 44" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M44 22C44 27.8348 41.6822 33.4305 37.5564 37.5564C33.4305 41.6822 27.8348 44 22 44C16.1652 44 10.5695 41.6822 6.44365 37.5564C2.31785 33.4305 0 27.8348 0 22C0 16.1652 2.31785 10.5695 6.44365 6.44365C10.5695 2.31785 16.1652 0 22 0C27.8348 0 33.4305 2.31785 37.5564 6.44365C41.6822 10.5695 44 16.1652 44 22ZM22.7892 16.2415C20.6497 17.1325 16.3708 18.975 9.95775 21.769C8.91825 22.1815 8.371 22.5885 8.3215 22.9845C8.239 23.6528 9.07775 23.9167 10.219 24.277L10.7002 24.4283C11.8223 24.794 13.3347 25.2202 14.1185 25.2367C14.8335 25.2533 15.6282 24.9618 16.5055 24.3568C22.4977 20.3115 25.5915 18.2682 25.784 18.2242C25.9215 18.1912 26.114 18.1528 26.2405 18.2682C26.3697 18.381 26.356 18.5982 26.3423 18.656C26.2598 19.0107 22.968 22.0688 21.2657 23.6528C20.735 24.1477 20.3582 24.497 20.2812 24.5768C20.1117 24.75 19.9393 24.9206 19.7642 25.0883C18.7192 26.0947 17.9382 26.8483 19.8055 28.0803C20.7048 28.6743 21.4253 29.161 22.143 29.6505C22.924 30.184 23.705 30.7148 24.717 31.3803C24.9727 31.5452 25.2203 31.724 25.4595 31.8945C26.3698 32.5435 27.192 33.1265 28.2013 33.033C28.7898 32.978 29.3975 32.428 29.7055 30.778C30.4342 26.8813 31.867 18.4415 32.197 14.9627C32.2171 14.6736 32.2051 14.383 32.1612 14.0965C32.1354 13.8653 32.0235 13.6523 31.8478 13.4998C31.5975 13.327 31.2992 13.2375 30.9953 13.244C30.1702 13.2577 28.897 13.7005 22.7892 16.2415Z" />
                    </svg>
                    <h1 class="mt-2 text-icon">Telegram</h1>
                </a>
                <a href="https://vk.com/axaxaxaxaxaxaxxxaxaxaxaxaxaxaxax" target="_blank" rel="noopener noreferrer" class="social_media_icon social_media_icon_how">
                    <svg class="icons" viewBox="0 0 44 44" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 0C9.84958 0 0 9.84958 0 22C0 34.1504 9.84958 44 22 44C34.1504 44 44 34.1504 44 22C44 9.84958 34.1504 0 22 0ZM30.4608 24.821C30.4608 24.821 32.4065 26.7415 32.8854 27.6329C32.8992 27.6512 32.906 27.6696 32.9106 27.6787C33.1054 28.0065 33.1512 28.2608 33.055 28.451C32.8946 28.7673 32.3446 28.9231 32.1567 28.9369H28.7192C28.4808 28.9369 27.9812 28.875 27.3762 28.4579C26.911 28.1325 26.4527 27.5985 26.0058 27.0783C25.339 26.3037 24.7615 25.6346 24.1794 25.6346C24.1054 25.6345 24.032 25.6461 23.9617 25.669C23.5217 25.811 22.9579 26.439 22.9579 28.1119C22.9579 28.6344 22.5454 28.9346 22.2544 28.9346H20.68C20.1437 28.9346 17.3502 28.7467 14.8752 26.1365C11.8456 22.9396 9.11854 16.5275 9.09562 16.4679C8.92375 16.0531 9.27896 15.8308 9.66625 15.8308H13.1381C13.601 15.8308 13.7523 16.1127 13.8577 16.3625C13.9815 16.6535 14.4352 17.8108 15.18 19.1125C16.3877 21.2346 17.1279 22.0962 17.7215 22.0962C17.8328 22.0949 17.9421 22.0666 18.04 22.0137C18.8146 21.5829 18.6702 18.8215 18.6358 18.2485C18.6358 18.1408 18.6335 17.0133 18.2371 16.4725C17.9529 16.0806 17.4694 15.9317 17.176 15.8767C17.2948 15.7128 17.4512 15.58 17.6321 15.4894C18.1637 15.2235 19.1217 15.1846 20.0727 15.1846H20.6021C21.6333 15.1983 21.8992 15.2648 22.2727 15.3587C23.029 15.5398 23.045 16.0279 22.9785 17.6985C22.9579 18.1729 22.9373 18.7092 22.9373 19.3417C22.9373 19.4792 22.9304 19.6258 22.9304 19.7817C22.9075 20.6319 22.88 21.5967 23.4804 21.9931C23.5587 22.0422 23.6492 22.0684 23.7417 22.0687C23.9502 22.0687 24.5781 22.0687 26.2785 19.1515C26.803 18.2125 27.2587 17.2367 27.6421 16.2319C27.6765 16.1723 27.7773 15.989 27.8965 15.9179C27.9844 15.8731 28.0819 15.8503 28.1806 15.8515H32.2621C32.7067 15.8515 33.0115 15.9179 33.0687 16.0898C33.1696 16.3625 33.0504 17.1944 31.1873 19.7175L30.3554 20.8152C28.6665 23.029 28.6665 23.1412 30.4608 24.821Z" />
                    </svg>
                    <h1 class="mt-2 text-icon">Вконтакте</h1>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="social_media_icon social_media_icon_how">
                    <svg class="icons" viewBox="0 0 44 44" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.00882943 44L2.98323 33.0704C1.02333 29.7107 -0.00635939 25.8896 2.95509e-05 22C2.95509e-05 9.84939 9.84942 0 22 0C34.1506 0 44 9.84939 44 22C44 34.1506 34.1506 44 22 44C18.1121 44.0062 14.2927 42.9773 10.934 41.019L0.00882943 44ZM14.0602 11.6776C13.7761 11.6952 13.4985 11.7701 13.244 11.8976C13.0054 12.0327 12.7875 12.2017 12.5972 12.3992C12.3332 12.6478 12.1836 12.8634 12.023 13.0724C11.2099 14.1306 10.7726 15.4295 10.78 16.764C10.7844 17.842 11.066 18.8914 11.506 19.8726C12.4058 21.857 13.8864 23.958 15.8422 25.905C16.313 26.3736 16.7728 26.8444 17.2678 27.2822C19.6953 29.4194 22.588 30.9607 25.7158 31.7834L26.9676 31.9748C27.3746 31.9968 27.7816 31.966 28.1908 31.9462C28.8315 31.9131 29.4572 31.7396 30.0234 31.438C30.3115 31.2896 30.5927 31.1281 30.866 30.954C30.866 30.954 30.9606 30.8924 31.141 30.756C31.438 30.536 31.6206 30.3798 31.867 30.1224C32.0496 29.9332 32.208 29.711 32.329 29.458C32.5006 29.0994 32.6722 28.4152 32.7426 27.8454C32.7954 27.4098 32.78 27.1722 32.7734 27.0248C32.7646 26.7894 32.5688 26.5452 32.3554 26.4418L31.075 25.8676C31.075 25.8676 29.161 25.0338 27.9928 24.5014C27.8696 24.4477 27.7376 24.4171 27.6034 24.4112C27.4529 24.3957 27.3008 24.4127 27.1574 24.4609C27.0139 24.509 26.8825 24.5874 26.7718 24.6906V24.6862C26.7608 24.6862 26.6134 24.8116 25.0228 26.7388C24.9315 26.8615 24.8058 26.9542 24.6616 27.0051C24.5174 27.056 24.3613 27.0629 24.2132 27.0248C24.0699 26.9865 23.9294 26.9379 23.793 26.8796C23.5202 26.7652 23.4256 26.7212 23.2386 26.6398L23.2276 26.6354C21.969 26.0859 20.8037 25.3436 19.7736 24.4354C19.4964 24.1934 19.239 23.9294 18.975 23.6742C18.1095 22.8453 17.3552 21.9076 16.731 20.8846L16.6012 20.6756C16.508 20.5352 16.4326 20.3837 16.3768 20.2246C16.2932 19.9012 16.511 19.6416 16.511 19.6416C16.511 19.6416 17.0456 19.0564 17.2942 18.7396C17.5012 18.4763 17.6943 18.2024 17.8728 17.919C18.1324 17.501 18.2138 17.072 18.0774 16.7398C17.4614 15.235 16.8234 13.7368 16.1678 12.2496C16.038 11.9548 15.653 11.7436 15.3032 11.7018C15.1844 11.6886 15.0656 11.6754 14.9468 11.6666C14.6514 11.6519 14.3553 11.6571 14.0602 11.6776Z" />
                    </svg>
                    <h1 class="mt-2 text-icon">WhatsApp</h1>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection