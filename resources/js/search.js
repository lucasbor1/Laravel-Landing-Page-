document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    if (!searchInput || !searchResults) return;

    let timeoutId;

    // Função para formatar preço em USD
    const formatPrice = (price) => {
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD'
        }).format(price);
    };

    // Renderiza os produtos retornados da busca
    const renderResults = (products) => {
        if (products.length === 0) {
            searchResults.innerHTML = `
                <div class="p-3 text-center text-muted">
                    <i class="bi bi-search mb-2 fs-4"></i>
                    <p class="mb-0">No products found</p>
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

    // Faz a busca com atraso (debounce)
    const performSearch = (query) => {
        if (query.length < 2) {
            searchResults.classList.add('d-none');
            return;
        }

        searchResults.classList.remove('d-none');
        searchResults.innerHTML = `
            <div class="p-3 text-center">
                <div class="spinner-border spinner-border-sm text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        `;

        axios.get(`/search?q=${encodeURIComponent(query)}`)
            .then(response => {
                renderResults(response.data);
            })
            .catch(error => {
                console.error('Search error:', error);
                searchResults.innerHTML = `
                    <div class="p-3 text-center text-danger">
                        <i class="bi bi-exclamation-circle mb-2 fs-4"></i>
                        <p class="mb-0">Error fetching products</p>
                    </div>
                `;
            });
    };

   
    searchInput.addEventListener('input', (e) => {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
            performSearch(e.target.value.trim());
        }, 300);
    });

    // Oculta a caixa de resultados se clicar fora
    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.classList.add('d-none');
        }
    });

    // Mostra resultados se tiver texto ao focar no campo
    searchInput.addEventListener('focus', () => {
        if (searchInput.value.trim().length >= 2) {
            searchResults.classList.remove('d-none');
        }
    });
});
