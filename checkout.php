<?php
include 'db.php';
include 'session.php';
include 'session_cart.php';



?>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Checkout Card</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald&family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/checkout.css">
        <script src="scripts/checkout.js"></script>
  </head>
<body>
<header id="Intestazione">
            <nav class="Nav">
                    <h2 id="Logo">Foodle</h2>
                        <ul class="Info">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="menu.php">Menu'</a></li>
                            <li><a href="cart.php">I tuoi ordini</a></li>
                            <li><a href="logout.php" class="Bottone">Logout</a></li>
                        </ul>
                        <div class="Menu">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
            </nav>
        </header>
<h2 class="check">CHECKOUT</h2>
<div class="flex-wrap2">
    <div class="info-2">
        <div class="Informazione">
            <form id="validate" method="POST">
                <div class="flex-wrap">
                    <div class="dati">
                        <h3 class="check">INSERISCI I DATI</h3>
                        <label>Nome</label>
                        <input type="text" id="nome" name="Nome" placeholder="Nome">
                        <label>Cognome</label>
                        <input type="text" id="cognome" name="Cognome" placeholder="Cognome">
                        <label>Email</label>
                        <input type="text" id="email" name="Email" placeholder="email">
                        <label>indirizzo</label>
                        <input type="text" id="indirizzo" name="Indirizzo" placeholder="Indirizzo" >
                        <input type="hidden" id="tot" name="tot">
                    </div>                   
                </div>
                <input type="submit" value="Effettua ordine" class="effettua">
            </form>
        </div>
    </div>
    <div class="info-3">
        <div class="item">
            <h4>Cart</h4>
        
        </div>
    </div>
</div>

<footer id="Chiusura">
            <div class="Info">
              <div id="Crediti">
                <div>
                  <h3>FOOD DELIVERY</h3>
                  <div>
                    <address>Ingegneria Informatica-DIEEI</address>
                    <p><a name="Contatta">Camiolo Luca O46002187</a></p>
                  </div>
                </div>
                <div class="Menu">
                  <h3>Menu</h3>
                  <div>
                  <ul>
                    <li><a href="account.html">Il mio account</li></a>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
        </footer>

</body>
</html>