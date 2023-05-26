$(function () {
    var frm = $('form[name=\'form1\']');
    frm.submit(function () {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                alert('Отлично! Перезвоним вам в течении получаса');
            },
            error: function () {
                alert('Ошибка! Проверьте правильность заполнения формы.');
            }
        });
        return false
    });
});