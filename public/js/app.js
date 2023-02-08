const slider = document.querySelector('.m-slider');
const slides = slider.getElementsByClassName('m-slide');
let i = 0;

const nextSlide = () => {
    slides[i].classList.remove('active');
    i = (i + 1) % slides.length;
    slides[i].classList.add('active');
}

const prevSlide = () => {
    slides[i].classList.remove('active');
    i = (i - 1 + slides.length) % slides.length;
    slides[i].classList.add('active');
}
