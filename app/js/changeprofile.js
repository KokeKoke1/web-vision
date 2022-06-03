const editprofile = document.querySelector("#editprofile");
const loaderprofile = document.querySelector(".loader.editprofile");

const emaillabel = document.querySelector("label#email");
const email = document.querySelector("input#email");

const discordlabel = document.querySelector("label#discord");
const discord = document.querySelector("input#discord");

const premium = document.querySelector("input#premium");

editprofile.addEventListener("click", () => {
    editprofile.style.display = "none";
    loaderprofile.style.display = "flex";
    setTimeout(() => { editprofile.style.display = "block";
        loaderprofile.style.display = "none";
        fetch('app/functions/api/changeprofile.php', {
            method: "POST",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                data: JSON.stringify({
                    email: email.value,
                    discord: discord.value,
                    premium: premium.ariaChecked
                })
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.email == "yes") {
                emaillabel.classList.remove("error");
                emaillabel.classList.add("succes");
            } else {
                emaillabel.classList.add("error");
                emaillabel.classList.remove("succes");
            }
            if (data.discord == "yes") {
                discordlabel.classList.remove("error");
                discordlabel.classList.add("succes");
            } else {
                discordlabel.classList.add("error");
                discordlabel.classList.remove("succes");
            }
        });
    }, 5000);
});
