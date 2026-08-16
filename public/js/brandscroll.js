document.addEventListener('DOMContentLoaded', function () {
    // Получаем ссылки на элементы меню и стрелки
    var menu = document.querySelector('.menu');
    var arrowLeft = document.querySelector('.arrow-left');
    var arrowRight = document.querySelector('.arrow-right');

    // Переменные для отслеживания состояния нажатия кнопки мыши и начальных координат
    var isMouseDown = false;
    var startX;
    var scrollLeft;

    // Обработчик события mousedown для начала перемещения меню
    menu.addEventListener('mousedown', function (event) {
        isMouseDown = true;
        startX = event.pageX - menu.offsetLeft;
        scrollLeft = menu.scrollLeft;
    });

    // Обработчик события mouseup для окончания перемещения меню
    menu.addEventListener('mouseup', function () {
        isMouseDown = false;
    });

    // Обработчик события mousemove для перемещения меню при удержании кнопки мыши
    menu.addEventListener('mousemove', function (event) {
        // Если кнопка мыши не нажата, выходим из функции
        if (!isMouseDown) return;
        event.preventDefault();
        var x = event.pageX - menu.offsetLeft;
        var walk = (x - startX) * 2;
        // Изменяем положение скролла меню на основе перемещения мыши
        menu.scrollLeft = scrollLeft - walk;
    });

    // Функция для проверки и отображения/скрытия стрелок
    function checkArrows() {
        arrowLeft.style.display = (menu.scrollLeft > 0) ? 'block' : 'none';
        arrowRight.style.display = (menu.scrollLeft < menu.scrollWidth - menu.clientWidth) ? 'block' : 'none';
    }

    // Проверяем видимость стрелок при загрузке страницы
    checkArrows();

    // Обработчик события click для перемещения меню влево при клике на левую стрелку
    arrowLeft.addEventListener('click', function () {
        menu.scrollLeft -= 100;
        checkArrows();
    });

    // Обработчик события click для перемещения меню вправо при клике на правую стрелку
    arrowRight.addEventListener('click', function () {
        menu.scrollLeft += 100;
        checkArrows();
    });

    // Обработчик события scroll для проверки видимости стрелок при скролле меню
    menu.addEventListener('scroll', function () {
        checkArrows();
    });
});
