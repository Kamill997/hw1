function onJImgInte(json)
{
    console.log(json);
    const photo=document.querySelector("#Intestazione");
   
    const photores=json.image;

    photo.style.backgroundImage='url('+photores+')';
}

function onGallery(json)
{
    console.log(json);
    const footer=document.querySelector("#Chiusura");

    for(result of json)
    {
      if(result.Nome=='Footer')
      {
        footer.style.backgroundImage='url('+result.Img+')';
      }
    }
}

function onMenu(json)
{
  console.log(json);

  const sect=document.querySelector("#elem");

  sect.innerHTML='';

  for(result of json)
  {
    const container = document.createElement("div");
    container.classList.add("flex-item");

    const title = document.createElement("h2");
    title.textContent = result.Nome;

    const immagine = document.createElement("img");
    immagine.src = result.Img;

    const testo = document.createElement("span");
    testo.classList.add("mostra");
    testo.textContent = "Clicca per visualizzare di che ricetta tipica si tratta";
    
    const descrizione=document.createElement("div");
    descrizione.classList.add("hidden");
    descrizione.classList.add("descrizione");
    
    const span=document.createElement("span");
    span.textContent=result.Descrizione;

    descrizione.appendChild(span);

    const prezzo=document.createElement("h3");
    prezzo.textContent="€"+result.Costo;

    const form=document.createElement("form");
    form.setAttribute("method","POST");
    form.setAttribute("class","addTo");

    const pid=document.createElement("input");
    pid.setAttribute("type","hidden");
    pid.setAttribute("class","pid");
    pid.setAttribute("name","pid");
    pid.setAttribute("value",result.ID_Cibo);

    const pnome=document.createElement("input");
    pnome.setAttribute("type","hidden");
    pnome.setAttribute("class","pnome");
    pnome.setAttribute("name","pnome");
    pnome.setAttribute("value",result.Nome);

    const pprezzo=document.createElement("input");
    pprezzo.setAttribute("type","hidden");
    pprezzo.setAttribute("class","pprezzo");
    pprezzo.setAttribute("name","pprezzo");
    pprezzo.setAttribute("value",result.Costo);

    const pImg=document.createElement("input");
    pImg.setAttribute("type","hidden");
    pImg.setAttribute("class","pImg");
    pImg.setAttribute("name","pImg");
    pImg.setAttribute("value",result.Img);

    const bottone = document.createElement("button");
    bottone.setAttribute("type",'submit');
    bottone.setAttribute("name","sb");
    bottone.classList.add("preferiti");
    bottone.innerHTML = "Aggiungi al carrello";
   
    container.appendChild(title);
    container.appendChild(immagine);
    container.appendChild(testo);
    container.appendChild(descrizione);
    container.appendChild(prezzo);
    testo.addEventListener("click",descr);
    container.appendChild(form);
    form.appendChild(pid);
    form.appendChild(pnome);
    form.appendChild(pprezzo);
    form.appendChild(pImg);
    form.appendChild(bottone);
    form.addEventListener('submit',Aggiungi);
    sect.appendChild(container);
  }
}

function onMenu2(json)
{
  console.log(json);

  const sect=document.querySelector("#elem");

  sect.innerHTML='';

  for(result of json)
  {
    const container = document.createElement("div");
    container.classList.add("flex-item");

    const title= document.createElement("h2");
    title.textContent = result.Nome;

    const immagine = document.createElement("img");
    immagine.src = result.Img;

    const testo = document.createElement("span");
    testo.classList.add("mostra");
    testo.textContent = "Clicca per visualizzare di che ricetta tipica si tratta";
    
    const descrizione=document.createElement("div");
    descrizione.classList.add("hidden");
    descrizione.classList.add("descrizione");
    
    const span=document.createElement("span");
    span.textContent=result.Descrizione;

    descrizione.appendChild(span);

    const prezzo=document.createElement("h3");
    prezzo.textContent="€"+result.Costo;

    const form=document.createElement("form");
    form.setAttribute("method","POST");
    form.setAttribute("class","addTo");

    const pid=document.createElement("input");
    pid.setAttribute("type","hidden");
    pid.setAttribute("class","pid");
    pid.setAttribute("name","pid");
    pid.setAttribute("value",result.ID_Cibo);

    const pnome=document.createElement("input");
    pnome.setAttribute("type","hidden");
    pnome.setAttribute("class","pnome");
    pnome.setAttribute("name","pnome");
    pnome.setAttribute("value",result.Nome);

    const pprezzo=document.createElement("input");
    pprezzo.setAttribute("type","hidden");
    pprezzo.setAttribute("class","pprezzo");
    pprezzo.setAttribute("name","pprezzo");
    pprezzo.setAttribute("value",result.Costo);

    const pImg=document.createElement("input");
    pImg.setAttribute("type","hidden");
    pImg.setAttribute("class","pImg");
    pImg.setAttribute("name","pImg");
    pImg.setAttribute("value",result.Img);

    const bottone = document.createElement("button");
    bottone.setAttribute("type",'submit');
    bottone.setAttribute("name","sb");
    bottone.classList.add("preferiti");
    bottone.innerHTML = "Aggiungi al carrello";
   
    container.appendChild(title);
    container.appendChild(immagine);
    container.appendChild(testo);
    container.appendChild(descrizione);
    container.appendChild(prezzo);
    testo.addEventListener("click",descr);
    container.appendChild(form);
    form.appendChild(pid);
    form.appendChild(pnome);
    form.appendChild(pprezzo);
    form.appendChild(pImg);
    form.appendChild(bottone);
    form.addEventListener('submit',Aggiungi);
    sect.appendChild(container);
  }
}

/*function onMenu(json)
{
  console.log(json);

  const product=document.querySelector("#result");

  for(result of json)
  {
    const div=document.createElement("div");
    
    const div2=document.createElement("div");

    const div3=document.createElement("div");

    const img=document.createElement("img");
    img.src=result.Img;

    const div4=document.createElement("div"); 

    const title=document.createElement("h4");
    title.textContent=result.Nome;

    const div5=document.createElement("div");
    const title2=document.createElement("h4");
    title2.textContent="Prezzo: €"+result.Costo;

    const descr=document.createElement("p");
    descr.textContent=result.Descrizione;
    descr.textContent=result.Tipo;

    div.appendChild(div2);
    div2.appendChild(div3);
    div3.appendChild(img);
    div3.appendChild(div4);
    div4.appendChild(title);
    div5.appendChild(title2);
    div5.appendChild(descr);
    product.appendChild(div);
  }
}*/

function searchResponse(response)
{
    console.log(response);
    return response.json();
}

function changeImg()
{
    const header='change_header.php'; 
    const footer='showphoto.php';   
    fetch(header).then(searchResponse).then(onJImgInte);
    fetch(footer).then(searchResponse).then(onGallery);
}

/*function ricerca(event)
{
    event.preventDefault();
    // Leggo il tipo e il contenuto da cercare e mando tutto alla pagina PHP
    const url='searchfood.php';
    
    const content=document.querySelector("#dish").value;
    // Mando le specifiche della richiesta alla pagina PHP, che prepara la richiesta e la inoltra
    fetch(url+"?q="+encodeURIComponent(content),{method:'GET'}).then(searchResponse).then(onRecipeJson);   
}

function tipo(json)
{
  console.log(json);

  const lista=document.querySelector(".lista");

  for(result of json)
  {
    const li=document.createElement("li");
    li.classList.add("lista-item");

    const div=document.createElement("div");
    div.classList.add("check");

    const label=document.createElement("label");
    label.classList.add("check-label");
    label.textContent=result.Tipo;

    const input=document.createElement("input");
    input.setAttribute("type","checkbox");
    input.setAttribute("value",result.Tipo);
    input.classList.add("check-input");
    input.classList.add("check-product");

    lista.appendChild(li);
    li.appendChild(div);
    div.appendChild(label);
    label.appendChild(input);
  }
}

function fetch_menu()
{
  const url='fetch_menu2.php';

  fetch(url).then(searchResponse).then(onMenu);
}

function filter()
{
  const url='fetch_tipo.php';

  fetch(url).then(searchResponse).then(tipo);
}*/

function menu(event)
{
  event.preventDefault();
  const content=document.querySelector("#dish").value;

  const url='fetch_menu.php';

  console.log(content);

  fetch(url+"?q="+encodeURIComponent(content)).then(searchResponse).then(onMenu);
}

function menu_home()
{
  const url='menu_benvenuto.php';

  fetch(url).then(searchResponse).then(onMenu2);
}

function descr(event)
{
  const testo=event.currentTarget;
  
  const desc=testo.parentNode.querySelector(".descrizione");
  desc.classList.remove("hidden");
  testo.textContent="Nascondi";

  testo.removeEventListener("click",descr);
  testo.addEventListener("click",nodescr);
}


function nodescr(event)
{
  const testo=event.currentTarget;
 
  const desc=testo.parentNode.querySelector(".descrizione");
  desc.classList.add("hidden");
  testo.textContent="Clicca per visualizzare di che ricetta tipica si tratta";

  testo.removeEventListener("click",nodescr);
  testo.addEventListener("click",descr);
}

function esito(response){
  console.log(response);
  return response.text();
}

function mostra(json)
{
  const sect=document.querySelector(".flex-item");
  console.log(json);
  if(json.exists===true)
  {
    alert("Elemento già presente");
  }
  else
  {
    alert("Elemento aggiunto correttamente");
  }
}

function Aggiungi(event)
{
  event.preventDefault();

  console.log(event.currentTarget);

  const url='addCart.php';

  const current=event.currentTarget;

  const form=new FormData();

  const id=current.querySelector(".pid").value;

  const nome=current.querySelector(".pnome").value;

  const prezzo=current.querySelector(".pprezzo").value;

  const img=current.querySelector(".pImg").value;

  form.append('pid',id);
  form.append('pnome',nome);
  form.append('pprezzo',prezzo);
  form.append('pImg',img);
  
  console.log(id);
  console.log(nome);
  console.log(prezzo);
  console.log(img);

  fetch(url,{method:'POST',body:form}).then(searchResponse).then(mostra);  
}

function CercaPiatti()
{
  const cerca=document.getElementById("barra").value;
  const piatti=document.querySelectorAll(".flex-item");

  for(let piatto of piatti)
  {
    if(piatto.querySelector("h2").textContent.toLowerCase().indexOf(cerca.toLowerCase())===-1)
    {
      piatto.classList.add("hidden");
    }
    
    else
    {
      piatto.classList.remove("hidden");
    }
  }
}

const form = document.querySelector("#search");
form.addEventListener("submit",menu);


window.onload=function()
{
  changeImg();
  menu_home();
  //filter();
  //fetch_menu();
}