let currentIndex = 0;
const slides = document.querySelectorAll('.carousel-item-custom');
const indicators = document.querySelectorAll('.carousel-indicators-custom li');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        indicators[i].classList.toggle('active-custom', i === index);
    });
    slides[index].classList.add('active');
}

function moveSlide(n) {
    currentIndex = (currentIndex + n + slides.length) % slides.length;
    showSlide(currentIndex);
}

function currentSlide(index) {
    currentIndex = index;
    showSlide(currentIndex);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentIndex);
    setInterval(() => moveSlide(1), 8000); // Change slide every 8 seconds
});