// app.js
import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import './search';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
      duration: 1000, // duração da animação
      once: true      // anima apenas na primeira vez
    });
  });

  document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('testimonialTrack');
    const items = track.querySelectorAll('.testimonial-carousel-item');
    let currentPosition = 0;
    const gap = 32;
    const itemWidth = items[0].offsetWidth + gap;

    setInterval(() => {
        currentPosition -= itemWidth;

        if (Math.abs(currentPosition) >= track.scrollWidth - track.parentElement.offsetWidth) {
            currentPosition = 0;
        }

        track.style.transform = `translateX(${currentPosition}px)`;
    }, 3000); // muda a cada 4 segundos
});


document.addEventListener('DOMContentLoaded', function () {
    // Função genérica para inicializar carrossel
    function initializeCarousel(trackId, nextId, prevId, options = {}) {
        const track = document.getElementById(trackId);
        const btnNext = document.getElementById(nextId);
        const btnPrev = document.getElementById(prevId);

        if (!track || !btnNext || !btnPrev) return;

        const {
            gapSize = 24,
            itemSelector = '.product-carousel-item',
            fullWidth = false
        } = options;

        let itemWidth;
        let currentPosition = 0;

        const updateItemWidth = () => {
            const item = track.querySelector(itemSelector);
            if (item) {
                itemWidth = fullWidth ? track.offsetWidth : item.offsetWidth + gapSize;
            }
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

    // Inicializar os três carrosséis
    initializeCarousel('carouselTrack', 'carouselNext', 'carouselPrev', {
        itemSelector: '.product-carousel-item',
        gapSize: 24
    });

    initializeCarousel('testimonialTrack', 'testimonialNext', 'testimonialPrev', {
        itemSelector: '.testimonial-carousel-item',
        gapSize: 32
    });

    initializeCarousel('featuredArticlesTrack', 'featuredPrev', 'featuredNext', {
        itemSelector: '.featured-article',
        fullWidth: true 
    });
});