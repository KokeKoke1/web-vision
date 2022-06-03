const textSlider = document.querySelector(".text-slider");

function nextSlide() {
    if (textSlider.scrollLeft < 500) {
        textSlider.scrollBy({ left: 1000, behavior: 'smooth' })
    } else {
        textSlider.scrollBy({ left: -1000, behavior: 'smooth' });
    }
    textSlider.classList.add("hidden");
    setTimeout(() => {textSlider.classList.remove("hidden")}, 400)
}

window.setInterval(() => nextSlide(), 10000);