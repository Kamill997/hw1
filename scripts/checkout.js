function ShowItem(json)
{
    console.log(json);

    let tot_prezzo=0;

    const tbody=document.querySelector(".item");

    for(result of json)
    {
        const nome=document.createElement("p");
        nome.textContent=result.Nome_Cibo+": ";

        const prezzo=document.createElement("span");
        prezzo.textContent="€"+result.Tot;

        tot_prezzo=tot_prezzo+parseFloat(result.Tot);

        nome.appendChild(prezzo);
        tbody.appendChild(nome);
    }

    const input=document.createElement("input");
    input.setAttribute("type","hidden");
    input.setAttribute("name","i");
    input.setAttribute("class","id");
    input.setAttribute("value",result.ID_Cibo);

    const tot=document.createElement("span");
    tot.classList.add("totale");
    tot.textContent="Prezzo totale: €"+tot_prezzo;

    tbody.appendChild(tot);
}

function HeaderCheckout(json)
{
    console.log(json);
    const photo=document.querySelector("#Intestazione");
    const footer=document.querySelector("#Chiusura");
    
    for(result of json)
    {
      if(result.Nome=="checkout")
      {
        photo.style.backgroundImage='url('+result.Img+')';
      }
      if(result.Nome=="Footer")
      {
        footer.style.backgroundImage='url('+result.Img+')';
      }
    }
}

function searchResponse(response)
{
    console.log(response);
    return response.json();
}

function checkout(event)
{
    const url='show_cart.php';
    
    fetch(url).then(searchResponse).then(ShowItem);
}

function Header_Checkout()
{
    const url='showphoto.php';
    fetch(url).then(searchResponse).then(HeaderCheckout);
}

window.onload=function()
{
    checkout();
    Header_Checkout();
}