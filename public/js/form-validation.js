$(function() {
    var frm = $('form[name=\'form1\']');
    frm.submit(function(event) {
        event.preventDefault(); // Предотвращаем отправку формы по умолчанию

        // Очищаем предыдущие сообщения об ошибках
        $('.alert.alert-danger').remove();

        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function(data) {
                alert('Отлично! Перезвоним вам в течение получаса');
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(field, messages) {
                        var input = $('#' + field);
                        input.addClass('is-invalid');

                        // Выводим сообщения об ошибках
                        $.each(messages, function(index, message) {
                            input.after('<div class="alert alert-danger mt-3">' + message + '</div>');
                        });
                    });
                } else {
                    alert('Ошибка! Проверьте правильность заполнения формы.');
                }
            }
        });
    });
});