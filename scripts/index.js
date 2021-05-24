/*function fetchGallery() {
    // Se nessun post è presente, ritorna null
    if (lastFetchedPostId === 0) return null;
    // Altrimenti, imposta l'utente se è settato
    const profile = document.body.dataset.user ? "?user="+document.body.dataset.user : "";

    // Nessun post è ancora st ato pubblicato
    if (lastFetchedPostId === null) 
        fetch("fetch_post.php"+profile).then(fetchResponse).then(fetchPostsJson);
    else 
        // Prende i post pubblicati dopo l'ultimo visualizzato
        fetch("fetch_post.php?from="+lastFetchedPostId+profile).then(fetchResponse).then(fetchPostsJson);
}

function fetchResponse(response) {
    if (!response.ok) {return null};
    return response.json();
}

function fetchPostsJson(json) {
    console.log("Fetching...");
    console.log(json);
    const feed = document.getElementById('feed');
    
    for (let i in json) {
        const post = document.getElementById('post_template').content.cloneNode(true).querySelector(".post");
        // Memorizzo l'id del post
        post.dataset.id = post.querySelector("input[type=hidden]").value = json[i].postid;
        // Imposto il nome dell'autore
        const name = post.querySelector(".name");
        name.textContent = json[i].name + " " + json[i].surname;
        // Controllo se l'utente è verificato
        if (json[i].verified === '1') {
            const verified = document.createElement('span');
            verified.classList.add('verified');
            name.appendChild(verified);
        }
        // Imposto altre informazioni
        post.querySelector(".username").textContent = "@" + json[i].username;
        post.querySelector(".time").textContent = json[i].time;
        post.querySelector(".avatar img").src = json[i].propic;
        post.querySelector(".names > a").href = json[i].username;
        let content;
        // A seconda del tipo di contenuto, imposto il tipo di visualizzazione
        if (json[i].content.type != 'text') {
            switch (json[i].content.type) {
                case 'unsplash':
                    content = document.createElement('img');
                    content.src = 'https://source.unsplash.com/'+json[i].content.id;
                    break;
                case 'cat':
                    content = document.createElement('img');
                    content.src = 'https://cdn2.thecatapi.com/images/'+json[i].content.id+'.jpg';
                    break;
                case "giphy":
                    content = document.createElement('img');
                    content.src = json[i].content.url;
                    break;
                case "spotify":
                    content = document.createElement('iframe');
                    content.src = "https://open.spotify.com/embed/track/"+json[i].content.id;
                    content.frameBorder = 0;
                    content.setAttribute('allowtransparency', 'true');
                    content.allow = "encrypted-media";
                    content.classList = "track_iframe";
                    break;
                default: break;
            }
            post.querySelector(".content").appendChild(content);
        }
        // Aggiungo la classe
        post.classList.add(json[i].content.type);
        // Imposto il testo
        post.querySelector(".text").textContent = json[i].content.text;
        // Controllo se l'utente ha messo like al post corrente
        const like = post.querySelector(".like");
        if (json[i].liked == 0) {
            // Aggiungo l'event listener per mettere like
            like.addEventListener('click', likePost);
        } else {
            // Aggiungo la classe liked e l'event listener per togliere il like
            like.classList.remove('like');
            like.classList.add('liked');
            like.addEventListener('click', unlikePost);
        }
        const nlike = like.querySelector("span");
        nlike.textContent = json[i].nlikes;
        // Aggiungo altri listener per altre funzionalità
        if (json[i].nlikes) nlike.addEventListener('click', likeView);
        post.querySelector(".comment").textContent = json[i].ncomments;
        post.querySelector(".comment").addEventListener('click', commentPost);
        post.querySelector("form").addEventListener('submit', sendNewComment);
        post.querySelector(".emotes").addEventListener('click', chooseEmote);

        feed.appendChild(post);
    }
    
    if (json.length < 10) {
        lastFetchedPostId =  0;
        printNoMoreContent();
    } else {
        // Prendo l'ultimo elemento del JSON
        lastFetchedPostId = json.pop().postid;
    }
    console.log("lastfetch"+lastFetchedPostId);
    onScrollCanLoad = true;
}*/

function onJImgInte(json)
{
  console.log(json);
    const photo=document.querySelector("#Intestazione");
   
    const photores=json.image;
    console.log(photores);
    
    photo.style.backgroundImage='url('+photores+')';
}

function onGallery(json)
{
  console.log(json);
  const gallery=document.querySelector("#Galleria .Foto");
  const marchi=document.querySelector("#Centro .Marchi");
  const marchi2=document.querySelector("#Centro .Marchi-2");
  const box=document.querySelector(".Box .Sinistra");
  const header=document.querySelector("#Intestazione");
  const footer=document.querySelector("#Chiusura");

  for(result of json)
  {  
    if(result.Nome=='KFC')
    {
        const div=document.createElement("div");
        div.classList.add("Kfc");

        const img=document.createElement("img");
        img.src=result.Img;
        const testo=document.createElement("h1");
        testo.textContent=result.Nome;

        div.appendChild(img);
        div.appendChild(testo);

        marchi.appendChild(div);
    }
    else if(result.Nome=='MC')
    {
        const div=document.createElement("div");
        div.classList.add("Mc");
        
        const img=document.createElement("img");
        img.src=result.Img;
        const testo=document.createElement("h1");
        testo.textContent=result.Nome;

        div.appendChild(img);
        div.appendChild(testo);

        marchi.appendChild(div);
    }
    else if(result.Nome=='STARBUCKS')
    {
        const div=document.createElement("div");
        div.classList.add("Starbucks");
        
        const img=document.createElement("img");
        img.src=result.Img;
        const testo=document.createElement("h1");
        testo.textContent=result.Nome;

        div.appendChild(img);
        div.appendChild(testo);

        marchi.appendChild(div);
    }
    else if(result.Nome=='CHIPOTLE')
    {
        const div=document.createElement("div");
        div.classList.add("Chipotle");
        
        const img=document.createElement("img");
        img.src=result.Img;
        const testo=document.createElement("h1");
        testo.textContent=result.Nome;

        div.appendChild(img);
        div.appendChild(testo);

        marchi2.appendChild(div);
    }
    else if(result.Nome=='BURGER KING')
    {
        const div=document.createElement("div");
        div.classList.add("BK");
        
        const img=document.createElement("img");
        img.src=result.Img;
        const testo=document.createElement("h1");
        testo.textContent=result.Nome;

        div.appendChild(img);
        div.appendChild(testo);

        marchi2.appendChild(div);
    }
    else if(result.Nome=='PIZZA HUT')
    {
        const div=document.createElement("div");
        div.classList.add("HUT");
        
        const img=document.createElement("img");
        img.src=result.Img;
        const testo=document.createElement("h1");
        testo.textContent=result.Nome;

        div.appendChild(img);
        div.appendChild(testo);

        marchi2.appendChild(div);
    }
    else if(result.Nome=='Box')
    {
        const img=document.createElement("img");
        img.src=result.Img;

        box.appendChild(img);
    }
    else if(result.Nome=='Header')
    {
        header.style.backgroundImage='url('+result.Img+')';
    }
    else if(result.Nome=='Footer')
    {
        footer.style.backgroundImage='url('+result.Img+')';
    }
    else
    {
        const div=document.createElement("div");
        
        const img=document.createElement("img");
        img.src=result.Img;

        div.appendChild(img);
        gallery.appendChild(div);
    }
  }
}

function searchResponse(response)
{
    console.log(response);
    return response.json();
}

function showGallery()
{
    const url='showphoto.php';
    fetch(url).then(searchResponse).then(onGallery);
}

window.onload=showGallery;