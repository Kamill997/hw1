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
        <link rel="stylesheet" href="css/menu.css"/>
        <script src="scripts/showfood.js" defer></script>
      </head>

      <body>
            <header id="Intestazione">
              <nav class="Nav">
                <h2 id="Logo">FoodLE</h2>
                    <ul class="Info">
                        <li><a href="index.php">home</a></li>
                        <li><a href="cart.php">I tuoi ordini</a></li>
                        <li><a href="#Contatta">Contattaci</a></li>
                        <li><a href="#visita">Inizia Subito</a></li>
                        <li><a href="logout.php" class="Bottone">Logout</a></li>
                    </ul>
                    <div class="Menu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </nav>
                <div class="Benvenuto">
                  <div class="Scegli">
                  <h2>I migliori ristoranti per ordinare il tuo cibo</h2>
                  <h3>
                    Scegli ciò che più preferisci <?php echo $_SESSION['username']; ?>
                  </h3>
                  <div>
                    <form id="search">
                      <input type = "text" name = "dish" id = "dish" placeholder="Trova qui"><input type ="submit" name="search" value="Trova" id="find">       
                    </form>
                  </div>
                  </div>
                </div>
            </header>

            <h1 class="Cerca">Ricerca i piatti che desideri:</h1>
           
              <div class="Nav">
                <input type="text" id="barra" onkeyup="CercaPiatti()" placeholder="Cerca piatto">
              </div>
       

            <article id="general"><a name=visita></a>
              

            <section class="dishes-grid general-elem" id="elem">


            </section>

          </article>

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