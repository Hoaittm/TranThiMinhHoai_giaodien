function scrollRight() {
    const slider = document.querySelector('.product-slider');
    slider.scrollBy({
        left: 350, // Adjust the scrolling distance as needed
        behavior: 'smooth'
    });
}

function scrollLeft() {
    const slider = document.querySelector('.product-slider');
    slider.scrollBy({
        left: -350, // Adjust the scrolling distance as needed
        behavior: 'smooth'
    });
}
