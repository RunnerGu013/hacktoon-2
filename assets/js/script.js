document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
        const prevButton = carousel.querySelector('.prev');
        const nextButton = carousel.querySelector('.next');
        const carouselItems = carousel.querySelector('.carousel-items');

        let currentIndex = 0;

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < carouselItems.children.length - 1) {
                currentIndex++;
                updateCarousel();
            }
        });

        function updateCarousel() {
            const itemWidth = carouselItems.children[0].offsetWidth;
            carouselItems.style.transform = `translateX(${-currentIndex * itemWidth}px)`;
        }
    });

    const donateButtons = document.querySelectorAll('.donate-button');
    const donationTotals = {
        roupas: 0,
        alimentos: 0,
        higiene: 0
    };

    const cartItems = document.getElementById('cart-items');
    let cart = [];

    donateButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');
            const item = button.getAttribute('data-item');
            
            // Adiciona o item ao carrinho
            cart.push({ category, item });
            updateCart();

            // Atualiza o total de doações por categoria
            donationTotals[category]++;
            document.getElementById(`total-${category}`).textContent = `Total de Doações: ${donationTotals[category]}`;
        });
    });

    function updateCart() {
        if (cart.length === 0) {
            cartItems.textContent = 'Nenhum item no carrinho';
        } else {
            cartItems.innerHTML = '';
            cart.forEach(cartItem => {
                const div = document.createElement('div');
                div.textContent = `${cartItem.item} (${cartItem.category})`;
                cartItems.appendChild(div);
            });
        }
    }

    // Exemplo de quantidade doada em porcentagem
    const donatedPercentage = 75; // Valor da porcentagem doada

    // Atualiza o tooltip com a porcentagem doada
    document.getElementById('tooltip').textContent = donatedPercentage + '% doado';
});
