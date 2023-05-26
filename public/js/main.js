var menu = document.querySelector('.menu');
var isMouseDown = false;
var startX;
var scrollLeft;

menu.addEventListener('mousedown', function (event) {
    isMouseDown = true;
    startX = event.pageX - menu.offsetLeft;
    scrollLeft = menu.scrollLeft;
});

menu.addEventListener('mouseup', function () {
    isMouseDown = false;
});

menu.addEventListener('mousemove', function (event) {
    if (!isMouseDown) return;
    event.preventDefault();
    var x = event.pageX - menu.offsetLeft;
    var walk = (x - startX) * 2;
    menu.scrollLeft = scrollLeft - walk;
});



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
