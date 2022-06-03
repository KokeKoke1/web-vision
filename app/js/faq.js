const faq = document.querySelector(".faq");
function createFAQ(question, answer) {
    const div = document.createElement("div");
    const q = document.createElement("div");
    const a = document.createElement("div");
    q.innerHTML = question;
    a.innerHTML = answer;
    q.classList.add("question");
    a.classList.add("answer");
    div.classList.add("faqGroup");
    div.appendChild(q);
    div.appendChild(a);
    faq.appendChild(div);
    q.addEventListener("click", () => {
        a.classList.toggle("visibleAnswer");
    });
}
{
createFAQ("Jaki jest adres IP serwera?","VisionMC.PL")
createFAQ("Jaka jest strona internetowa serwera?","www.visionmc.pl")
createFAQ("Kto jest właścicielem serwera?","Kok3,makowiecc_")
createFAQ("Kto może naprawić błędy techniczne na serwerze?","Kok3,makowiecc_")
createFAQ("Kto może naprawić błędy związane z budowaniem?","Kok3,makowiecc_")
createFAQ("Kto będzie zajmował się rekrutacją jak i administracja?","Kok3,makowiecc")
createFAQ("Jaki jest discord serwera?","https://discord.gg/tcsczWnx3k")
createFAQ("Jakie tryby są na serwerze?","Bedwars,DeathRun,MediumHC")
createFAQ("Gdzie można zakupić usługę?","https://visionmc.pl/sklep/")
createFAQ("Jaki jest adres mailowy serwera?/Kontakt","support@visionmc.pl")
createFAQ("Nie doszła mi usługa lub nie pamiętam hasła na serwer a nie mam dodanego adresu email co mam zrobić?","Skontaktuj się z nami poprzez mail: support@visionmc.pl lub discord:https://discord.gg/tcsczWnx3k")
createFAQ("Co zrobić gdy widzę że gracz łamie regulamin?","Wpisz komende /helpop [gracz] lub zgłoś to bezpośrednio do nas na discord.")
createFAQ("Co zrobić gdy widzę błąd na serwerze?","Zgłoś to szybko na discord/kanał #błędy!")
}
