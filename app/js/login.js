const login = document.querySelector("#login");
const loader = document.querySelector(".loader");
const nicknamelabel = document.querySelector("label#nick");
const nickname = document.querySelector("input#nick");
const nickerror = document.querySelector(".nickerror");
const passwordlabel = document.querySelector("label#password");
const password = document.querySelector("input#password");
const passworderror = document.querySelector(".passworderror");

login.addEventListener("click", () => {
    if (nickname.value != "" && password.value != "") {
        login.style.display = "none";
        loader.style.display = "flex";
        setTimeout(() => {
            fetch(`app/functions/api/login.php?function=login&nick=${nickname.value}&password=${password.value}`)
            .then(response => response.json())
            .then(data => {
                if (data == "nullLOGIN") {
                    nickerror.innerHTML = "Niepoprawny nick";
                    nicknamelabel.classList.add("error");
                } else if (data == "nullPASSWORD") {
                    nicknamelabel.classList.remove("error");
                    nicknamelabel.classList.add("succes");
                    passworderror.textContent = "Niepoprawne haslo";
                    passwordlabel.classList.add("error");
                } else if (data == "yes") {
                    passwordlabel.classList.remove("error");
                    nicknamelabel.classList.add("succes");
                    passwordlabel.classList.add("succes");
                    document.location.search = "?profile";
                } else {
                    nickerror.innerHTML = "Wystapil problem";
                    nicknamelabel.classList.add("error");
                    passworderror.textContent = "Wystapil problem";
                    passwordlabel.classList.add("error");
                }
                login.style.display = "block";
                loader.style.display = "none";
            });
        }, 2000);
    } else {
        nickerror.innerHTML = "Wprowadz nick";
        nicknamelabel.classList.add("error");
        passworderror.textContent = "Wprowadz haslo";
        passwordlabel.classList.add("error");
    }
});

nickname.addEventListener("focusout", () => {
    if (nickname.value == "") {
        nickerror.innerHTML = "Wprowadz nick";
        nicknamelabel.classList.add("error");
    }
});

password.addEventListener("focusout", () => {
    if (password.value == "") {
        passworderror.textContent = "Wprowadz haslo";
        passwordlabel.classList.add("error");
    } else {
        passwordlabel.classList.remove("error");
        passwordlabel.classList.remove("succes");
    }
});