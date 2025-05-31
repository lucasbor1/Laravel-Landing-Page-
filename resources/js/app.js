import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';

document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('carouselTrack');
    const btnNext = document.getElementById('carouselNext');
    const btnPrev = document.getElementById('carouselPrev');

    if (!track || !btnNext || !btnPrev) return;

    let itemWidth;
    let currentPosition = 0;

    const updateItemWidth = () => {
        const item = track.querySelector('.product-carousel-item');
        if (item) itemWidth = item.offsetWidth + 24;
    };

    const moveNext = () => {
        currentPosition -= itemWidth;
        if (Math.abs(currentPosition) >= track.scrollWidth) {
            currentPosition = 0;
        }
        track.style.transform = `translateX(${currentPosition}px)`;
    };

    const movePrev = () => {
        currentPosition += itemWidth;
        if (currentPosition > 0) {
            currentPosition = -(track.scrollWidth - track.parentElement.offsetWidth);
        }
        track.style.transform = `translateX(${currentPosition}px)`;
    };

    btnNext.addEventListener('click', moveNext);
    btnPrev.addEventListener('click', movePrev);

    updateItemWidth();
    window.addEventListener('resize', () => {
        updateItemWidth();
        track.style.transform = `translateX(${currentPosition}px)`;
    });
});
