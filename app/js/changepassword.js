const login = document.querySelector("#changepassword");
const loader = document.querySelector(".loader.password");
const oldpasswordlabel = document.querySelector("label#oldpassword");
const oldpassword = document.querySelector("input#oldpassword");

const newpasswordlabel = document.querySelector("label#newpassword");
const newpassword = document.querySelector("input#newpassword");

const renewpasswordlabel = document.querySelector("label#renewpassword");
const renewpassword = document.querySelector("input#renewpassword");

login.addEventListener("click", () => {
    if (oldpassword.value != "" && newpassword.value != "" && renewpassword.value != "") {
        login.style.display = "none";
        loader.style.display = "flex";
        setTimeout(() => { login.style.display = "block";
            loader.style.display = "none";
            fetch(`app/functions/api/passwordchange.php?oldpassword=${oldpassword.value}&newpassword=${newpassword.value}&renewpassword=${renewpassword.value}`)
            .then(response => response.json())
            .then(data => {
                if (data == "yes") {
                    oldpasswordlabel.classList.remove("error");
                    newpasswordlabel.classList.remove("error");
                    renewpasswordlabel.classList.remove("error");
                    oldpasswordlabel.classList.add("succes");
                    newpasswordlabel.classList.add("succes");
                    renewpasswordlabel.classList.add("succes");
                } else {
                    oldpasswordlabel.classList.add("error");
                    newpasswordlabel.classList.add("error");
                    renewpasswordlabel.classList.add("error");
                }
            });
        }, 5000);
    } else {
        oldpasswordlabel.classList.add("error");
        newpasswordlabel.classList.add("error");
        renewpasswordlabel.classList.add("error");
    }
});

oldpassword.addEventListener("focusout", () => {
    if (oldpassword.value == "") { oldpasswordlabel.classList.add("error"); } 
    else { oldpasswordlabel.classList.remove("error"); }
});
newpassword.addEventListener("focusout", () => {
    if (newpassword.value == "") { newpasswordlabel.classList.add("error"); } 
    else { newpasswordlabel.classList.remove("error"); }
});
renewpassword.addEventListener("focusout", () => {
    if (renewpassword.value == "") { renewpasswordlabel.classList.add("error"); } 
    else { renewpasswordlabel.classList.remove("error"); }
});