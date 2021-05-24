<?php

    require 'db.php';

    require 'session.php';

    require 'session_cart.php';

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>I Piatti</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald&family=Raleway:wght@300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/cart.css"/>
        <script src="scripts/cart.js" defer></script>
      </head>
    
    <body>
        <header id="Intestazione">
            <nav class="Nav">
                    <h2 id="Logo">Foodle</h2>
                        <ul class="Info">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="menu.php">Menu'</a></li>
                            <li><a href="logout.php" class="Bottone">Logout</a></li>
                        </ul>
                        <div class="Menu">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
            </nav>
        </header>

        <section id="item">  

        <div class="Contenitore">
            <div class="Contenuto">
                <h1>CARRELLO</h1>
                <div class="cart">
                    <table class="table">
                        <tbody>
                             <tr>
                 
                            </tr>
                        </tbody>                          
                    </table>
                </div>
            </div>
        </div>
        </section>

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