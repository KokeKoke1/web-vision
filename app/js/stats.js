


let loadergeneral = document.querySelector(".loader-general");
loadergeneral.style.display = "block";
let loadermediumhc = document.querySelector(".loader-general");
loadermediumhc.style.display = "block";
let loaderdeathrun = document.querySelector(".loader-deathrun");
loaderdeathrun.style.display = "block";
let loaderbedwars = document.querySelector(".loader-bedwars");
loaderbedwars.style.display = "block";
fetch (`app/functions/api/stats.php`)
.then(response => response.json())
.then(data => {
    console.log(data)
    setTimeout(() => {
        loadergeneral.style.display = "none";
        createBlockStat("Exp", data.Exp, "general");
        createBlockStat("Spedzony czas", data.SpedzonyCzas, "general");
        createBlockStat("Osiagniecia", data.Osiagniecia, "general");
        createBlockStat("Pieniadze w portfelu", data.Portfel, "general");
    
        loadermediumhc.style.display = "none";
        createBlockStat("Punkty", data.Punkty, "mediumhc");
        createBlockStat("Zabojstwa", data.Zabojstwa, "mediumhc");
        createBlockStat("Zgony", data.Zgony, "mediumhc");
        createBlockStat("Asysty", data.Asysty, "mediumhc");
        createBlockStat("Koxy", data.Koxy, "mediumhc");
        createBlockStat("Refile", data.Refile, "mediumhc");
        createBlockStat("Perly", data.Perly, "mediumhc");
    }, 1000)
});

function createBlockStat(name, value, object) {
    let o = document.querySelector(`.${object}`);
    let div = document.createElement("div");
    div.classList.add("center");
    div.innerHTML = `<h2>${value}</h2>${name}`;
    o.appendChild(div);
}