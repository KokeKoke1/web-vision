const row = document.querySelector("#articles");
const btnloadsite = document.querySelector("#loadarticle");
const loader = document.querySelector(".loader");
let postsList = [];
let posts = 0;

const postCreateElement = (selector, className) => {
    let e = document.createElement(selector);
    if (className != null) {
        e.classList.add(className);
    }
    return e;
}

async function generatePost(number) {
    try {
        if (postsList.length == 0) {
            let result = await fetch("app/functions/api/forums.php", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    option: "getArticles"
                })
            })
            
            let data = await result.json();
            for (let i=0;i<data.length;i++) {
                postsList.push(data[i]);
            }
        }
        for (let i=0;i<number;i++) {
            if (posts < postsList.length) {
                createPost(postsList[posts].ID, postsList[posts].Title, postsList[posts].Content,postsList[posts].Autor,postsList[posts].Date);
                posts++;
            }
        }
    }
    catch { console.log("Error"); }
}


const createPost = (i,n,t,a,d) => {
    loader.style.display = "block";
    btnloadsite.style.display = "none";
    let card = postCreateElement("article", "article");
    let header = postCreateElement("header", "title");
    let information = postCreateElement("div", "information");
    let selection = postCreateElement("selection", null);

    card.appendChild(header);
    card.appendChild(information);
    card.appendChild(selection);
    
    t = t.slice(0, 320);
    row.appendChild(card);
    setTimeout(() => {
        loader.style.display = "none";
        btnloadsite.style.display = "block";
        information.innerHTML = `Autor: ${a}<h2>Data: ${d}</h2>`;
        header.innerHTML = `<a href="?news=${i}&title=${n}">${n}</a>`;
        selection.innerHTML = t + `... <a href='?news=${i}&title=${n}'>Czytaj dalej.</a>`;
    }, 500);
}


generatePost(3);

btnloadsite.addEventListener("click", () => {
    generatePost(2);
})


