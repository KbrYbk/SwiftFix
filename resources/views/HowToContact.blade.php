@extends('layouts.app')

@section('content')
<section class="container">
    <h1 class="text-center my-5 name-section">Как с нами связаться?</h1>
    <div class="row row-cols-lg-2 row-cols-1 mb-5">
        <div class="col mb-5">
            <!--ГДЕ НАХОДИМСЯ-->
            <div class="where">
                <h2 class="my-3">Мы находимся по адресу:</h2>
                <div class="row align-items-center justify-content-center">
                    <div class="col-1">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.9999 16.2917C16.0606 16.2917 15.1598 15.9185 14.4956 15.2543C13.8314 14.5901 13.4583 13.6893 13.4583 12.75C13.4583 11.8107 13.8314 10.9099 14.4956 10.2457C15.1598 9.58147 16.0606 9.20833 16.9999 9.20833C17.9392 9.20833 18.8401 9.58147 19.5043 10.2457C20.1684 10.9099 20.5416 11.8107 20.5416 12.75C20.5416 13.2151 20.45 13.6756 20.272 14.1053C20.094 14.535 19.8331 14.9255 19.5043 15.2543C19.1754 15.5832 18.785 15.8441 18.3553 16.0221C17.9256 16.2001 17.465 16.2917 16.9999 16.2917ZM16.9999 2.83333C14.3699 2.83333 11.8475 3.87812 9.98778 5.73785C8.12804 7.59759 7.08325 10.1199 7.08325 12.75C7.08325 20.1875 16.9999 31.1667 16.9999 31.1667C16.9999 31.1667 26.9166 20.1875 26.9166 12.75C26.9166 10.1199 25.8718 7.59759 24.0121 5.73785C22.1523 3.87812 19.63 2.83333 16.9999 2.83333Z" fill="black" />
                        </svg>
                    </div>
                    <div class="col">
                        <h3> <a href="https://yandex.ru/maps/-/CCUkQNrR1B" target="_blank" class="link">Туполева 3</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--ТЕЛЕФОН-->
            <div class="phone">
                <h2 class="my-3">Наш номер телефона:</h2>

                <div class="row align-items-center justify-content-center">
                    <div class="col-1">
                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.9167 17.4292C26.9167 14.6667 25.9543 12.323 24.0295 10.3983C22.1057 8.47442 19.7625 7.5125 17 7.5125V4.67917C18.7708 4.67917 20.4297 5.01539 21.9767 5.68784C23.5228 6.36122 24.8686 7.27072 26.0142 8.41633C27.1589 9.561 28.0679 10.9068 28.7413 12.4538C29.4138 13.9999 29.75 15.6583 29.75 17.4292H26.9167ZM21.25 17.4292C21.25 16.2486 20.8368 15.2451 20.0104 14.4188C19.184 13.5924 18.1806 13.1792 17 13.1792V10.3458C18.9597 10.3458 20.6304 11.0362 22.0122 12.417C23.3929 13.7987 24.0833 15.4694 24.0833 17.4292H21.25ZM28.2625 30.25C25.2167 30.25 22.2478 29.5709 19.3559 28.2128C16.4631 26.8557 13.9013 25.0612 11.6705 22.8295C9.43878 20.5987 7.64433 18.0369 6.28717 15.1441C4.92906 12.2522 4.25 9.28334 4.25 6.2375C4.25 5.8125 4.39167 5.45834 4.675 5.175C4.95833 4.89167 5.3125 4.75 5.7375 4.75H11.475C11.8056 4.75 12.1007 4.85625 12.3604 5.06875C12.6201 5.28125 12.7736 5.55278 12.8208 5.88334L13.7417 10.8417C13.7889 11.1722 13.7832 11.473 13.7247 11.7441C13.6652 12.0161 13.5292 12.2583 13.3167 12.4708L9.91667 15.9417C10.9083 17.6417 12.1479 19.2354 13.6354 20.7229C15.1229 22.2104 16.7639 23.4972 18.5583 24.5833L21.8875 21.2542C22.1 21.0417 22.3777 20.8821 22.7205 20.7753C23.0624 20.6696 23.3986 20.6403 23.7292 20.6875L28.6167 21.6792C28.9472 21.75 29.2187 21.9091 29.4312 22.1566C29.6437 22.405 29.75 22.6944 29.75 23.025V28.7625C29.75 29.1875 29.6083 29.5417 29.325 29.825C29.0417 30.1083 28.6875 30.25 28.2625 30.25Z" fill="black" />
                        </svg>
                    </div>
                    <div class="col">
                        <h3> <a href="tel:+7(983)-523-55-34" class="link">+7(983)-523-55-34</a> <br>
                            <a href="tel:+7(999)-459-03-84" class="link">+7(999)-459-03-84</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--ПОЧТА-->
            <div class="mail">
                <h2 class="my-3">Электронная почта:</h2>
                <div class="row align-items-center justify-content-center">
                    <div class="col-1">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.3333 5.66667H5.66659C4.10825 5.66667 2.83325 6.94167 2.83325 8.5V25.5C2.83325 27.0583 4.10825 28.3333 5.66659 28.3333H28.3333C29.8916 28.3333 31.1666 27.0583 31.1666 25.5V8.5C31.1666 6.94167 29.8916 5.66667 28.3333 5.66667ZM27.7666 11.6875L18.5016 17.4817C17.5808 18.0625 16.4191 18.0625 15.4983 17.4817L6.23325 11.6875C6.0912 11.6078 5.9668 11.5 5.86759 11.3708C5.76838 11.2416 5.69642 11.0936 5.65607 10.9358C5.61571 10.7779 5.6078 10.6136 5.63281 10.4526C5.65782 10.2916 5.71523 10.1374 5.80157 9.99926C5.88791 9.86112 6.00138 9.74193 6.13511 9.64891C6.26885 9.55589 6.42007 9.49098 6.57962 9.45809C6.73917 9.42521 6.90374 9.42504 7.06335 9.45759C7.22297 9.49015 7.37433 9.55476 7.50825 9.6475L16.9999 15.5833L26.4916 9.6475C26.6255 9.55476 26.7769 9.49015 26.9365 9.45759C27.0961 9.42504 27.2607 9.42521 27.4202 9.45809C27.5798 9.49098 27.731 9.55589 27.8647 9.64891C27.9985 9.74193 28.1119 9.86112 28.1983 9.99926C28.2846 10.1374 28.342 10.2916 28.367 10.4526C28.392 10.6136 28.3841 10.7779 28.3438 10.9358C28.3034 11.0936 28.2315 11.2416 28.1322 11.3708C28.033 11.5 27.9086 11.6078 27.7666 11.6875Z" fill="black" />
                        </svg>
                    </div>
                    <div class="col">
                        <h3><a href="mailto:swift-fix@gmail.com" class="link">swift-fix@gmail.com</a></h3>
                    </div>
                </div>
            </div>
            <!--ВРЕМЯ РАБОТЫ-->
            <div class="time-work">
                <h2 class="my-3">Режим работы:</h2>
                <div class="row align-items-center justify-content-center">
                    <div class="col-1">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.55 17.2712V12.35C18.55 11.9108 18.4017 11.5424 18.1052 11.2448C17.8076 10.9483 17.4392 10.8 17 10.8C16.5608 10.8 16.193 10.9483 15.8964 11.2448C15.5988 11.5424 15.45 11.9108 15.45 12.35V17C15.45 17.5167 15.5404 17.9946 15.7212 18.4338C15.9021 18.8729 16.1733 19.2733 16.535 19.635L19.8287 22.9287C20.1388 23.2387 20.5071 23.3937 20.9339 23.3937C21.3596 23.3937 21.7275 23.2387 22.0375 22.9287C22.3217 22.6187 22.4637 22.2509 22.4637 21.8251C22.4637 21.3984 22.3217 21.0429 22.0375 20.7587L18.55 17.2712ZM17 4.6C16.5608 4.6 16.193 4.74828 15.8964 5.04485C15.5988 5.34245 15.45 5.71083 15.45 6.15C15.45 6.58917 15.5988 6.95755 15.8964 7.25515C16.193 7.55172 16.5608 7.7 17 7.7C17.4392 7.7 17.8076 7.55172 18.1052 7.25515C18.4017 6.95755 18.55 6.58917 18.55 6.15C18.55 5.71083 18.4017 5.34245 18.1052 5.04485C17.8076 4.74828 17.4392 4.6 17 4.6ZM29.4 17C29.4 16.5608 29.2512 16.1924 28.9536 15.8948C28.657 15.5983 28.2892 15.45 27.85 15.45C27.4108 15.45 27.043 15.5983 26.7464 15.8948C26.4488 16.1924 26.3 16.5608 26.3 17C26.3 17.4392 26.4488 17.807 26.7464 18.1036C27.043 18.4012 27.4108 18.55 27.85 18.55C28.2892 18.55 28.657 18.4012 28.9536 18.1036C29.2512 17.807 29.4 17.4392 29.4 17ZM17 26.3C16.5608 26.3 16.193 26.4488 15.8964 26.7464C15.5988 27.043 15.45 27.4108 15.45 27.85C15.45 28.2892 15.5988 28.657 15.8964 28.9536C16.193 29.2512 16.5608 29.4 17 29.4C17.4392 29.4 17.8076 29.2512 18.1052 28.9536C18.4017 28.657 18.55 28.2892 18.55 27.85C18.55 27.4108 18.4017 27.043 18.1052 26.7464C17.8076 26.4488 17.4392 26.3 17 26.3ZM7.7 17C7.7 16.5608 7.55172 16.1924 7.25515 15.8948C6.95755 15.5983 6.58917 15.45 6.15 15.45C5.71083 15.45 5.34245 15.5983 5.04485 15.8948C4.74828 16.1924 4.6 16.5608 4.6 17C4.6 17.4392 4.74828 17.807 5.04485 18.1036C5.34245 18.4012 5.71083 18.55 6.15 18.55C6.58917 18.55 6.95755 18.4012 7.25515 18.1036C7.55172 17.807 7.7 17.4392 7.7 17ZM17 32.5C14.8558 32.5 12.8408 32.0929 10.955 31.2786C9.06917 30.4654 7.42875 29.3612 6.03375 27.9662C4.63875 26.5713 3.53463 24.9308 2.7214 23.045C1.90713 21.1592 1.5 19.1442 1.5 17C1.5 14.8558 1.90713 12.8408 2.7214 10.955C3.53463 9.06917 4.63875 7.42875 6.03375 6.03375C7.42875 4.63875 9.06917 3.53412 10.955 2.71985C12.8408 1.90662 14.8558 1.5 17 1.5C19.1442 1.5 21.1592 1.90662 23.045 2.71985C24.9308 3.53412 26.5713 4.63875 27.9662 6.03375C29.3612 7.42875 30.4654 9.06917 31.2786 10.955C32.0929 12.8408 32.5 14.8558 32.5 17C32.5 19.1442 32.0929 21.1592 31.2786 23.045C30.4654 24.9308 29.3612 26.5713 27.9662 27.9662C26.5713 29.3612 24.9308 30.4654 23.045 31.2786C21.1592 32.0929 19.1442 32.5 17 32.5Z" fill="black" />
                        </svg>
                    </div>
                    <div class="col">
                        <h3>Без выходных с 10:00 до 22:00</h3>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="col form">
            <form action="{{route('callback')}}" method="POST" class="form-howtocontact p-5 h-100" name="form1">
                <h3 class="text-center mb-4">Напишите нам<br>Ответим в ближайшее время</h3>
                @csrf
                <div class="row align-items-center">
                    <div class="col-12 col-lg mb-3"><input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя" required></div>
                    <div class="col-12 col-lg mb-3"><input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Ваш номер телефона" required></div>
                    <div class="col-12 mb-3"><input type="text" class="form-control que" name="device_model" id="" placeholder="Интересующий ваш вопрос" required></div>
                    <div class="col text-center mb-3"><button type="submit" class="btn btn-outline-secondary">Отправить вопрос</button></div>
                </div>
            </form>

        </div>
    </div>
</section>
<section class="container">
    <h1 class="text-center my-5 name-section">Наши социальные сети</h1>
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
</section>
<section class="container">
    <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A41c5d883898e43229ab54a066031145dfe95f410b3a80e5e5d827766864acd9d&amp;source=constructor" width="100%" height="640" frameborder="0"></iframe>
</section>
@endsection