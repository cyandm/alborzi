document.addEventListener('DOMContentLoaded', () => {
    const cursor = document.getElementById('customCursor');

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = `${e.clientX}px`;
        cursor.style.top = `${e.clientY}px`;
    });

    const cards = document.querySelectorAll('.card-container');
    cards.forEach((card) => {
        card.addEventListener('mouseenter', () => {
            const imageUrl = card.querySelector('img').src; 
            cursor.style.backgroundImage = `url(${imageUrl})`;
            cursor.classList.remove('scale-0');
        });

        card.addEventListener('mouseleave', () => {
            cursor.classList.add('scale-0');
        });
    });


    const sliders = document.querySelectorAll('swiper-container');
    sliders.forEach((slider) => {
        slider.addEventListener('mouseenter', () => {
            const imageUrl = window.location.origin + '/wp-content/themes/alborzi/assets/img/slider-mouse.png'; 
            cursor.style.backgroundImage = `url(${imageUrl})`;
            cursor.classList.remove('scale-0');
        });

        slider.addEventListener('mouseleave', () => {
            cursor.classList.add('scale-0');
        });
    });
    
});