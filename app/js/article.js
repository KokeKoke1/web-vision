const row = document.querySelector("#article");
const comment = document.querySelector(".comments")

function timeDifference(previous) {
    var msPerMinute = 60 * 1000;
    var msPerHour = msPerMinute * 60;
    var msPerDay = msPerHour * 24;
    var msPerMonth = msPerDay * 30;
    var msPerYear = msPerDay * 365;

    var elapsed = new Date() - previous;

    if (elapsed < msPerMinute) {
         return Math.round(elapsed/1000) + ' sekundy temu.';   
    } else if (elapsed < msPerHour) {
         return Math.round(elapsed/msPerMinute) + ' minuty/a temu';   
    } else if (elapsed < msPerDay ) {
         return Math.round(elapsed/msPerHour ) + ' godziny/a temu';   
    } else if (elapsed < msPerMonth) {
         return Math.round(elapsed/msPerDay) + ' dzien/dni temu';   
    } else if (elapsed < msPerYear) {
         return Math.round(elapsed/msPerMonth) + ' miesiac/miesiace temu';   
    } else {
         return Math.round(elapsed/msPerYear ) + ' rok/lata temu';   
    }
}

const postCreateElement = (selector, className) => {
    let e = document.createElement(selector);
    if (className != null) {
        e.classList.add(className);
    }
    return e;
}

async function generatePost(idx) {
    try {
        let result = await fetch("app/functions/api/forums.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                option: "getArticle",
                id: idx
            })
        })
        
        let data = await result.json();
        createPost(idx, data.Title, data.Content,data.Autor,data.Date);

        generateComments(idx);
        
    }
    catch { 
        let x = document.createElement("div");
        x.innerHTML = "Brak komentarzy";
        x.style.fontSize = "1.2rem";
        comment.appendChild(x);
     }
}

async function generateComments(idx) {
    result = await fetch("app/functions/api/forums.php", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            option: "getComments",
            id: idx
        })
    })
    data = await result.json();
    let commentss = document.querySelectorAll(".comment");
    if (commentss.length > 0) {
        for (let i=0;i<commentss.length;i++) {
            commentss[i].remove();
        }
    }
    for (let i=0;i<data.length;i++) {
        createComment(data[i].Autor, data[i].Date, data[i].Content)
    }
}

let x = window.location.search;
x = x.split("=");
x = x[1].split("&");
x = x[0]*1;
generatePost(x);

const createPost = (id,n,t,a,d) => {
    let card = postCreateElement("article", "article");
    let card2 = postCreateElement("div", null);
    let header = postCreateElement("header", "title");
    let information = postCreateElement("div", "information");
    let commentsinfo = postCreateElement("div", "information");
    let selection = postCreateElement("selection", null);

    commentsinfo.innerHTML = "<h3>Sekcja komentarzy</h3>"

    card.appendChild(selection);
    information.innerHTML = `Autor: ${a}</span><h2>Data: ${d}</h2>`;
    header.innerHTML = n;
    selection.innerHTML = t;
    row.innerHTML = "";
    card2.appendChild(header);
    card2.appendChild(information);
    row.appendChild(card2);
    row.appendChild(card);
    row.appendChild(commentsinfo);

    const addComment = document.querySelector(".addComment");

    addComment.addEventListener("click", () => {
        let commentinput = document.querySelector(".commentinput");
        let commenttext = commentinput.value;
        if (commenttext != "") {
            commentinput.classList.remove("error");
            commentinput.classList.add("success");
            commentinput.value = "";
            fetch("app/functions/api/forums.php", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    option: "addComment",
                    id: id,
                    text: commenttext
                })
            }).then(() => { generateComments(id) })
        } else {
            commentinput.classList.remove("success");
            commentinput.classList.add("error");
        }
    })

}

const createComment = (a,d,t) => {
    let card = postCreateElement("div", "comment");
    let information = postCreateElement("div", "information");
    let selection = postCreateElement("selection", null);
    d = new Date(d);

    information.innerHTML = `<img style="max-width: 40px; box-shadow: 0 0 2px gray;" src="https://mc-heads.net/avatar/identifier/${a}">${a}<span style="font-size: 1rem">${timeDifference(d)}</span>`; 
    selection.innerHTML = t;

    card.appendChild(information);
    card.appendChild(selection);
    comment.appendChild(card);
}