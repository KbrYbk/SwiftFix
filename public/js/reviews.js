document.addEventListener('DOMContentLoaded', function() {
    var reviewsContainer = document.getElementById('reviewsContainer');
    var toggleReviewsButton = document.getElementById('toggleReviewsButton');
    var reviewCards = reviewsContainer.getElementsByClassName('reviewCard');
    var visibleReviews = {{ $visibleReviews }};
    var totalReviews = {{ count($reviews) }};
    var reviewsHidden = true;

    toggleReviewsButton.addEventListener('click', function() {
        for (var i = visibleReviews; i < totalReviews; i++) {
            reviewCards[i].style.display = reviewsHidden ? 'block' : 'none';
        }
        toggleReviewsButton.innerText = reviewsHidden ? 'Скрыть отзывы' : 'Ещё отзывы';
        reviewsHidden = !reviewsHidden;
    });
});
