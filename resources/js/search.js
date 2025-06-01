document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    
    if (!searchInput || !searchResults) return;

    let timeoutId;

    // Função para formatar preço
    const formatPrice = (price) => {
        return new Intl.NumberFormat('pt-BR', {
            style: 'currency',
            currency: 'BRL'
        }).format(price);
    };

    // Função para renderizar resultados
    const renderResults = (products) => {
        if (products.length === 0) {
            searchResults.innerHTML = `
                <div class="p-3 text-center text-muted">
                    <i class="bi bi-search mb-2 fs-4"></i>
                    <p class="mb-0">Nenhum produto encontrado</p>
                </div>
            `;
        } else {
            searchResults.innerHTML = products.map(product => `
                <div class="p-2 border-bottom search-item" role="button">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="${product.image}" alt="${product.name}" 
                                 class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">${product.name}</h6>
                            <small class="text-muted">${product.category}</small>
                            <div class="mt-1">
                                <span class="text-primary fw-bold">${formatPrice(product.price)}</span>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');

            // Adicionar hover effect
            const searchItems = searchResults.querySelectorAll('.search-item');
            searchItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    item.style.backgroundColor = '#f8f9fa';
                });
                item.addEventListener('mouseleave', () => {
                    item.style.backgroundColor = 'transparent';
                });
            });
        }
    };

    // Função para fazer a busca
    const performSearch = (query) => {
        if (query.length < 2) {
            searchResults.classList.add('d-none');
            return;
        }

        // Mostrar loading
        searchResults.classList.remove('d-none');
        searchResults.innerHTML = `
            <div class="p-3 text-center">
                <div class="spinner-border spinner-border-sm text-primary" role="status">
                    <span class="visually-hidden">Carregando...</span>
                </div>
            </div>
        `;

        // Fazer requisição AJAX
        axios.get(`/search?q=${encodeURIComponent(query)}`)
            .then(response => {
                renderResults(response.data);
            })
            .catch(error => {
                console.error('Erro na busca:', error);
                searchResults.innerHTML = `
                    <div class="p-3 text-center text-danger">
                        <i class="bi bi-exclamation-circle mb-2 fs-4"></i>
                        <p class="mb-0">Erro ao buscar produtos</p>
                    </div>
                `;
            });
    };

    // Event listener para input com debounce
    searchInput.addEventListener('input', (e) => {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
            performSearch(e.target.value.trim());
        }, 300); // Aguarda 300ms após o usuário parar de digitar
    });

    // Fechar resultados ao clicar fora
    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.classList.add('d-none');
        }
    });

    // Abrir resultados ao focar no input
    searchInput.addEventListener('focus', () => {
        if (searchInput.value.trim().length >= 2) {
            searchResults.classList.remove('d-none');
        }
    });
});
