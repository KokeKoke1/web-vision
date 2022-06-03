
const elementsScroll = document.querySelectorAll(".animation-scroll");

window.addEventListener('scroll', function() {
    for (let i=0;i<elementsScroll.length;i++) {
        if ((elementsScroll[i].getBoundingClientRect().top - window.innerHeight) < -120) {
            elementsScroll[i].classList.add("animation-scroll-show");
            elementsScroll[i].classList.remove("animation-scroll");
        }
    }
});

