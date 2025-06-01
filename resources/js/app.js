import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import './search';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1000,
        once: true
    });

    // Função para inicializar qualquer carrossel horizontal com botões
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
            const maxScroll = track.scrollWidth - track.parentElement.offsetWidth;

            if (Math.abs(currentPosition) >= maxScroll) {
                currentPosition = 0;
            }

            track.style.transform = `translateX(${currentPosition}px)`;
        };

        const movePrev = () => {
            currentPosition += itemWidth;
            const maxScroll = track.scrollWidth - track.parentElement.offsetWidth;

            if (currentPosition > 0) {
                currentPosition = -maxScroll;
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

    // Autoplay: Carrossel de depoimentos (um por um)
    const testimonialTrack = document.getElementById('testimonialTrack');
    const testimonialItems = testimonialTrack?.querySelectorAll('.testimonial-carousel-item');

    if (testimonialTrack && testimonialItems?.length) {
        let tIndex = 0;
        const tGap = 32;
        const tItemWidth = testimonialItems[0].offsetWidth + tGap;

        setInterval(() => {
            tIndex++;
            const tMax = testimonialTrack.scrollWidth - testimonialTrack.parentElement.offsetWidth;
            let tPos = -(tIndex * tItemWidth);

            if (Math.abs(tPos) >= tMax) {
                tIndex = 0;
                tPos = 0;
            }

            testimonialTrack.style.transform = `translateX(${tPos}px)`;
        }, 4000);
    }

    // Autoplay: Carrossel de produtos (um por um)
    const productTrack = document.getElementById('carouselTrack');
    const productItems = productTrack?.querySelectorAll('.product-carousel-item');

    if (productTrack && productItems?.length) {
        let pIndex = 0;
        const pGap = 24;
        const pItemWidth = productItems[0].offsetWidth + pGap;

        setInterval(() => {
            pIndex++;
            const pMax = productTrack.scrollWidth - productTrack.parentElement.offsetWidth;
            let pPos = -(pIndex * pItemWidth);

            if (Math.abs(pPos) >= pMax) {
                pIndex = 0;
                pPos = 0;
            }

            productTrack.style.transform = `translateX(${pPos}px)`;
        }, 4000);
    }

        // Botão "Voltar ao Topo"
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });
    
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    
});
