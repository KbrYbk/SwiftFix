@extends('layouts.app')

@section('content')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card main-form">
                <div class="card-header">{{ __('Обработка персональных данных') }}</div>

                <div class="card-body">
                    <h5 class="card-title">Цель сбора персональных данных:</h5>
                    <p class="card-text">
                    <ul>
                        <li>
                            Объясните, для каких целей вы собираете персональные данные пользователей, например, для предоставления доступа к сервису, обработки платежей, предоставления персонализированного контента и т.д.
                        </li>
                    </ul>

                    <h5 class="card-title"> Виды собираемых персональных данных:</h5>
                    <p class="card-text">
                    <ul>
                        <li>
                            Укажите, какие категории персональных данных вы собираете, например, имя, адрес электронной почты, номер телефона и прочие необходимые данные.
                        </li>
                    </ul>
                    <h5 class="card-title"> Основание для обработки персональных данных:</h5>
                    <p class="card-text">
                    <ul>
                        <li>
                            Укажите юридическое основание для обработки персональных данных, например, согласие пользователей, заключение договора, соблюдение законных обязательств и т.д.
                        </li>
                    </ul>
                    <h5 class="card-title"> Способы сбора персональных данных:</h5>
                    <p class="card-text">
                    <ul>
                        <li>
                            Укажите, каким образом вы собираете персональные данные пользователей, например, через регистрационные формы, файлы cookie, аналитические инструменты и т.д.
                        </li>
                    </ul>
                    <h5 class="card-title"> Передача персональных данных третьим лицам:</h5>
                    <p class="card-text">
                    <ul>
                        <li>
                            Если вы передаете персональные данные третьим лицам, укажите, какие данные передаются и для каких целей, а также опишите меры, которые вы принимаете для защиты этих данных.
                        </li>
                    </ul>
                    <h5 class="card-title"> Сохранение и удаление персональных данных:</h5>
                    <p class="card-text">
                    <ul>
                        <li>
                            Объясните, как долго вы будете хранить персональные данные пользователей и когда они будут удалены или анонимизированы. Укажите соответствующие сроки хранения в соответствии с применимыми законодательными требованиями.
                        </li>
                    </ul>
                    <h5 class="card-title"> Меры безопасности:</h5>
                    <p class="card-text">
                    <ul>
                        <li>
                            Опишите меры безопасности, которые вы применяете для защиты персональных данных пользователей от несанкционированного доступа, утраты, изменения или раскрытия.
                        </li>
                    </ul>
                    <h5 class="card-title"> Права пользователей:</h5>
                    <p class="card-text">
                    <ul>
                        <li>
                            Укажите права пользователей в отношении их персональных данных, такие как право на доступ, исправление, удаление, ограничение обработки и возражение.
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endsection