if (window.location.search == "?" || window.location.search == "") { 
    const nav = document.querySelector("nav");

    window.addEventListener('scroll', function() {
        if (scrollY > 10) {
            nav.classList.add("activex");
        } else {
            nav.classList.remove("activex");
        }
    });
}

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}