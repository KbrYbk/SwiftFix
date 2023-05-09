document.addEventListener('DOMContentLoaded', function () {
    var callbackForm = document.getElementById('callbackForm');
    var popup = document.getElementById('popup');

    callbackForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Отправка формы с использованием Fetch API
        fetch(callbackForm.action, {
            method: callbackForm.method,
            body: new FormData(callbackForm)
        })
            .then(function (response) {
                if (response.ok) {
                    // Отображение всплывающего окна
                    popup.style.display = 'block';

                    // Скрытие всплывающего окна через 3 секунды
                    setTimeout(function () {
                        popup.style.display = 'none';
                    }, 3000);
                }
            })
            .catch(function (error) {
                console.error('Error:', error);
            });
    });
});