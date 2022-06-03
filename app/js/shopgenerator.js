const shopGui = document.querySelector("#offerts");
const modal = document.querySelector(".modal");
const nick = document.querySelector("input.nick");

function shopCookie() {
    let nickname = nick.value;
    fetch(`app/functions/api/createCookieShop.php?nick=${nickname}`)
    .then(response => response.json())
    .then(data => {
        if (data == "yes") {
            document.location.search = "?sklep";
        } else {
            nick.classList.add("error");
        }
    });
}

const loadOffert = (numb,price,sms) => {
    let nick = readCookie("nick");
    let card = document.createElement("div");
    card.classList.add("card");
    if (numb == 3 || numb == 4 || numb == 5) {
        card.innerHTML = `<span class="best">BEST SELLER</span>
        <span class="pricing">${price} ZŁ</span>
        <img src="app/images/${1}.png" alt="">
        <div class="title">Doładowanie: ${price} ZŁ</div>
        <span>PRZELEW/PSC${sms}</span>`;
    } else {
        card.innerHTML = `
        <span class="pricing">${price} ZŁ</span>
        <img src="app/images/${1}.png" alt="">
        <div class="title">Doładowanie: ${price} ZŁ</div>
        <span>PRZELEW/PSC${sms}</span>`;
    }
    let btn = document.createElement("button");
    btn.classList.add("buy");
    btn.classList.add("btn");
    btn.textContent = "Zakup";
    card.appendChild(btn);
    shopGui.appendChild(card);
    btn.addEventListener("click", () => {
        modal.innerHTML = `
            <div class="modalGui">
            <div class="header">Wybierz sposób płatności<button class="btn close"><i class="fa-solid fa-xmark"></i></button></div>
            <div class="modalrow">
                <img src="https://mc-heads.net/body/${nick}/128.png">
                <div class="content" style="justify-content: center">
                    <div style="margin-left: 20px; font-size: 1.5rem;">Usługa: <b>${price}zł</b></div>
                    <div style="margin-left: 20px; font-size: 1.5rem;">Gracz: <b>${nick}</b></div>
                    <button class="btn join">PSC<br>(Koszt: ${price},00zl)</button>
                    <button class="btn join">PRZELEW<br>(Koszt: ${price},00zl)</button>
                    <div class="content">
                        <h2>SMS</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis molestiae beatae rerum? Vero assumenda earum facere minus! Saepe earum veritatis voluptatum, eos, perspiciatis cum magnam perferendis incidunt necessitatibus nesciunt ut?
                    </div>
                </div>
            </div>
        <div style="padding: 15px;">VisionMc &copy <a style="color: black;" href="?regulamin">Regulamin</a></div>
        </div>`;
        modal.style.display = "block";
        let modalGui = document.querySelector(".modalGui");
        setTimeout(() => {
            modal.style.opacity = "1";
            modalGui.style.opacity = "1";
            modalGui.style.transform = "translate(-50%,-50%)";
        }, 1)
        let close = document.querySelector(".close");
        close.addEventListener("click", () => {
            modal.style.opacity = "0";
            modalGui.style.opacity = "0";
            modalGui.style.transform = "translate(-50%,-40%)";
            setTimeout(() => { modal.style.display = "none"; modal.innerHTML = ""; }, 500);
        })
    });
}

function onLoadOffert() {
    let cookieshop = document.querySelector("#cookieshop");
    cookieshop.innerHTML = `<span style="font-size: 1.7rem">Aktualnie usługi kupijesz na porfilu<b> ${readCookie("nick")}</b><button style="margin: 25px;" class="btn menulogout" onClick="window.location.search = 'logout';">Wyloguj lub zamień konto</button></span>`;
    let price = [ 1,2,5,10,20,30,50,100 ];
    let sms = [ "","","","/SMS","/SMS","/SMS","","" ];
    for (let i=0;i<price.length;i++) {
        loadOffert(i,price[i],sms[i]);
    }
}
if (shopGui != undefined) {
    onLoadOffert();
}