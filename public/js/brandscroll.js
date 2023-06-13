document.addEventListener('DOMContentLoaded', function () {
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
});