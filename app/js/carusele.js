
const btnSlide = document.querySelectorAll(".menuprofile");
const carusele = document.querySelector(".profileSlider");

for (let i=0;i<btnSlide.length;i++) {
    if (i == 0) { btnSlide[i].style.background = "var(--color-green)"; }
    else { btnSlide[i].style.background = "var(--color-light-blue)"; }
}
for (let i=0;i<btnSlide.length;i++) {
    btnSlide[i].addEventListener("click", () => {
        for (let d=0;d<btnSlide.length;d++) {
            if (d == i) { btnSlide[d].style.background = "var(--color-green)"; }
            else { btnSlide[d].style.background = "var(--color-light-blue)"; }
        }
        let x = carusele.offsetWidth * i;
        carusele.scrollTo({ left: x, behavior: 'smooth' });
    });
}


const menustats = document.querySelectorAll(".menustats");
const caruseleStat = document.querySelector(".profileSlider.stats");

for (let i=0;i<menustats.length;i++) {
    if (i == 0) { menustats[i].style.background = "var(--color-main-dark)"; }
    else { menustats[i].style.background = "var(--color-light-blue)"; }
}
for (let i=0;i<menustats.length;i++) {
    menustats[i].addEventListener("click", () => {
        for (let d=0;d<menustats.length;d++) {
            if (d == i) { menustats[d].style.background = "var(--color-main-dark)"; }
            else { menustats[d].style.background = "var(--color-light-blue)"; }
        }
        let x = caruseleStat.offsetWidth * i;
        caruseleStat.scrollTo({ left: x, behavior: 'smooth' });
    });
}