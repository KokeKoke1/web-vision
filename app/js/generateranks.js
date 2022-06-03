const table = document.querySelector("table");

createRank("Pisanie na lobby", "true", "true", "true");
createRank("BEDWARS", "", "", "");
createRank("Komenda /dodatki", "true", "true", "true");
createRank("2 klasy na raz", "false", "false", "true");

function createRank(n,v,sv,s) {
    const tr = document.createElement("tr");
    let name = document.createElement("td");
    let vip = document.createElement("td");
    let svip = document.createElement("td");
    let sup = document.createElement("td");
    name.innerHTML = n;
    if (v == "false") { vip.innerHTML = `<i class="fa-solid fa-circle-xmark"></i>`; }
    else if (v == "true") { vip.innerHTML = `<i class="fa-solid fa-circle-check"></i>`; }
    else { vip.innerHTML = v; }

    if (sv == "false") { svip.innerHTML = `<i class="fa-solid fa-circle-xmark"></i>`; }
    else if (sv == "true") { svip.innerHTML = `<i class="fa-solid fa-circle-check"></i>`; }
    else if (sv == "") { }
    else { svip.innerHTML = v; }

    if (s == "false") { sup.innerHTML = `<i class="fa-solid fa-circle-xmark"></i>`; }
    else if (s == "true") { sup.innerHTML = `<i class="fa-solid fa-circle-check"></i>`; }
    else if (s == "") { 
        name = document.createElement("th");
        vip = document.createElement("th");
        svip = document.createElement("th");
        sup = document.createElement("th");
        name.colSpan = "4";

        name.innerHTML = n;
    }
    else { sup.innerHTML = v; }
    tr.appendChild(name);
    if (s != "") { 
        tr.appendChild(vip);
        tr.appendChild(svip);
        tr.appendChild(sup);
    }
    table.appendChild(tr);
}