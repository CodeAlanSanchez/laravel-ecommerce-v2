const carousel = document.querySelector(".carousel");
const track = document.querySelector(".carousel__track");
const indicatorNav = document.querySelector(".carousel__nav");
const prevButton = document.querySelector(".carousel .carousel__button-left");
const nextButton = document.querySelector(".carousel .carousel__button-right");

const slides = Array.from(track.children);

let activeSlide = 0;

slides[0].classList.add("active");

const addClickListener = (button, num) => {
    button.addEventListener("click", () => {
        switchSlide(num);
    });
};

[
    { button: prevButton, num: -1 },
    { button: nextButton, num: 1 },
].map((i) => addClickListener(i.button, i.num));

const initiateNav = () => {
    let buttonHTML = '<button class="carousel__indicator"></button>';
    slides.forEach(() => (indicatorNav.innerHTML += buttonHTML));
};

initiateNav();

const buttons = Array.from(indicatorNav.children);

buttons[activeSlide].classList.add("active");

buttons.forEach((b, index) =>
    b.addEventListener("click", () => switchToSlide(index))
);

let activateSlide = () => {
    slides.forEach((slide) => slide.classList.remove("active"));
    slides[activeSlide].classList.add("active");

    buttons.map((button) => button.classList.remove("active"));
    buttons[activeSlide].classList.add("active");
};

let switchToSlide = (index) => {
    activeSlide = index;

    activateSlide();
};

let switchSlide = (index) => {
    if (index === -1 && activeSlide === 0) {
        activeSlide = slides.length - 1;
    } else if (index === 1 && activeSlide === slides.length - 1) {
        activeSlide = 0;
    } else {
        activeSlide += index;
    }

    activateSlide();
};

let autoSlide = setInterval(() => switchSlide(1), 5000);
