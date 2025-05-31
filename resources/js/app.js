import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';

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

    // Função para inicializar o carrossel de artigos
    function initializeArticlesCarousel() {
        const container = document.querySelector('.articles-grid');
        const articles = Array.from(container.querySelectorAll('.article-item'));
        const btnNext = document.getElementById('articlesPrev');
        const btnPrev = document.getElementById('articlesNext');

        if (!container || !articles.length || !btnNext || !btnPrev) return;

        let currentFeaturedIndex = 0;

        function updateArticles(direction) {
            // Remove classes do artigo atual
            articles[currentFeaturedIndex].classList.remove('featured-article');
            articles[currentFeaturedIndex].classList.add('small-article');

            // Atualiza o índice baseado na direção
            if (direction === 'next') {
                currentFeaturedIndex = (currentFeaturedIndex + 1) % articles.length;
            } else {
                currentFeaturedIndex = (currentFeaturedIndex - 1 + articles.length) % articles.length;
            }

            // Adiciona classes ao novo artigo em destaque
            articles[currentFeaturedIndex].classList.remove('small-article');
            articles[currentFeaturedIndex].classList.add('featured-article');

            // Atualiza a ordem dos artigos
            articles.forEach((article, index) => {
                if (index === currentFeaturedIndex) {
                    article.style.order = '0'; // Artigo em destaque sempre primeiro
                } else {
                    // Reorganiza os artigos pequenos
                    let order = index;
                    if (index < currentFeaturedIndex) {
                        order = articles.length + index;
                    }
                    article.style.order = order.toString();
                }
            });

            // Atualiza a visibilidade do overlay e informações do autor
            articles.forEach((article, index) => {
                const overlay = article.querySelector('.article-overlay');
                const authorInfo = article.querySelector('.article-author');
                const readMore = article.querySelector('.read-more');

                if (index === currentFeaturedIndex) {
                    overlay.style.background = 'linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.4), transparent)';
                    if (authorInfo) authorInfo.style.display = 'none';
                    if (readMore) readMore.style.display = 'block';
                } else {
                    overlay.style.background = 'none';
                    if (authorInfo) authorInfo.style.display = 'flex';
                    if (readMore) readMore.style.display = 'none';
                }
            });
        }

        // Event listeners para os botões
        btnNext.addEventListener('click', () => {
            updateArticles('next');
        });

        btnPrev.addEventListener('click', () => {
            updateArticles('prev');
        });

        // Inicializa o estado inicial
        updateArticles('next');
    }

    // Inicializar os carrosséis
    initializeCarousel('carouselTrack', 'carouselNext', 'carouselPrev', {
        itemSelector: '.product-carousel-item',
        gapSize: 24
    });

    initializeCarousel('testimonialTrack', 'testimonialNext', 'testimonialPrev', {
        itemSelector: '.testimonial-carousel-item',
        gapSize: 32
    });

    // Inicializa o carrossel de artigos
    initializeArticlesCarousel();
});