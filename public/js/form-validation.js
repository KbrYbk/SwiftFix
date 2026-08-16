$(function () {
    var frm = $('form[name=\'form1\']');
    frm.submit(function (event) {
        event.preventDefault(); // Предотвращаем отправку формы по умолчанию

        // Очищаем предыдущие сообщения об ошибках
        $('.alert.alert-danger').remove();

        var agreementCheckbox = $('#agreementCheckbox');
        if (agreementCheckbox.prop('checked')) {
            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
                beforeSend: function () {
                    // Добавляем состояние загрузки
                    $('#loading').show();
                },
                success: function (data) {
                    $('#modal-2').addClass('active');
                    frm[0].reset(); // Очистка полей формы
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function (field, messages) {
                            var input = $('#' + field);
                            input.addClass('is-invalid');

                            // Выводим сообщения об ошибках
                            $.each(messages, function (index, message) {
                                input.after('<div class="alert alert-danger mt-3">' + message + '</div>');
                            });
                        });
                    } else if (xhr.status === 429) {
                        alert('Слишком много запросов. Попробуйте позже.');
                    } else {
                        alert('Ошибка! Проверьте правильность заполнения формы.');
                    }
                },
                complete: function () {
                    // Удаляем состояние загрузки
                    $('#loading').hide();
                }
            });
        } else {
            alert('Пожалуйста, примите условия пользовательского соглашения и согласие на обработку персональных данных.');
        }
    });

    // Инициализация маски ввода для номера телефона
    $('#phone_number').inputmask('+7 999-999-99-99');
});
