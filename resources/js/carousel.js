const carousel = document.querySelector(".carousel");

const track = document.querySelector(".carousel__track");

const indicatorNav = document.querySelector(".carousel__nav");

const slides = Array.from(track.children);

let activeSlide = 0;

slides[0].classList.add("active");

const prevButton = document.querySelector(".carousel .carousel__button-left");

const nextButton = document.querySelector(".carousel .carousel__button-right");

prevButton.addEventListener("click", () => {
    switchSlide(-1);
});

nextButton.addEventListener("click", () => {
    switchSlide(1);
});

const switchSlide = (index) => {
    console.log(slides);
    if (index === -1 && activeSlide === 0) {
        activeSlide = slides.length - 1;
    } else if (index === 1 && activeSlide === slides.length - 1) {
        activeSlide = 0;
    } else {
        activeSlide += index;
    }
    console.log(activeSlide);
    slides.forEach((slide) => slide.classList.remove("active"));
    slides[activeSlide].classList.add("active");
};

(() => {
    let buttons = "";

    slides.forEach(
        (slide) => (buttons += '<button class="carousel__indicator"></button>')
    );

    indicatorNav.innerHTML = buttons;
})();
