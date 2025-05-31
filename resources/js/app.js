// app.js
import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';

document.addEventListener('DOMContentLoaded', function () {
    // Função genérica para inicializar carrossel
    function initializeCarousel(trackId, nextId, prevId, gapSize = 24) {
        const track = document.getElementById(trackId);
        const btnNext = document.getElementById(nextId);
        const btnPrev = document.getElementById(prevId);

        if (!track || !btnNext || !btnPrev) return;

        let itemWidth;
        let currentPosition = 0;

        const updateItemWidth = () => {
            const item = track.querySelector('.product-carousel-item, .testimonial-carousel-item');
            if (item) itemWidth = item.offsetWidth + gapSize;
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
    }

    // Inicializar ambos os carrosséis
    initializeCarousel('carouselTrack', 'carouselNext', 'carouselPrev');
    initializeCarousel('testimonialTrack', 'testimonialNext', 'testimonialPrev', 32); // gap de 32px para testimonials
});