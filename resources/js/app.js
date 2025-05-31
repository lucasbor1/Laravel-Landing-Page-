import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';

document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('carouselTrack');
    const btnNext = document.getElementById('carouselNext');
    const btnPrev = document.getElementById('carouselPrev');

    if (!track || !btnNext || !btnPrev) return; 

    const itemWidth = track.querySelector('.product-carousel-item').offsetWidth + 24;
    let currentPosition = 0;
    const maxPosition = -(track.children.length - 3) * itemWidth;

    btnNext.addEventListener('click', () => {
        if (currentPosition > maxPosition) {
            currentPosition -= itemWidth;
            track.style.transform = `translateX(${currentPosition}px)`;
        }
    });

    btnPrev.addEventListener('click', () => {
        if (currentPosition < 0) {
            currentPosition += itemWidth;
            track.style.transform = `translateX(${currentPosition}px)`;
        }
    });
});
