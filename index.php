<?php
//include auth_session.php file on all user panel pages
  require 'db.php';

  session_start();


?>

<html>
    <head>
        <Title>Foodle</Title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald&family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css">
        <script src="scripts/index.js" defer></script>
    </head>
    <body>
            <header id="Intestazione">
              <nav class="Nav">
                <h2 id="Logo">Foodle</h2>
                <?php
                  if(!isset($_SESSION['username']))
                  {
                    echo 
                    '<ul class="Info">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#Contatta">Contattaci</a></li>
                        <li><a href="login.php" class="Bottone">Accedi/Registrati</a></li>
                    </ul>';
                  }
                  else
                  {
                    echo 
                    '<ul class="Info">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#Contatta">Contattaci</a></li>
                        <li><a href="logout.php" class="Bottone">Logout</a></li>
                    </ul>';
                  }
                  ?>
                    <div class="Menu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </nav>
              <div class="Benvenuto">
                <div>
                <h2>Perchè non farsi un bel boccone</h2>
                <h3>
                  Ordina ciò che vuoi,quando vuoi e dove vuoi
                </h3>
                <a href="menu.php" class="Bottone">Guarda adesso</a>
              </div>
            </div>
            </header>
            <section id="Centro">
              <h2>Ecco alcuni dei ristoranti più apprezzati dai nostri clienti</h2>
              <div class="Marchi">

              </div>
                <div class="Marchi-2">

                </div>
              </div>
            </section>
            <section id="Contenitore-flex">
                <div class="Box">
                    <div class="Sinistra">

                    </div>
                    <div class="Destra">
                      <p>
                        <strong><em>The discovery of a new dish does more for the happiness of the human race than the discovery of a star.</em></strong>
                      </p>
                      <p>
                        <em>Anthelme Brillat-Savarin</em>
                      </p>
                    </div>
                </div>
            </section>
            <section id="Fine">
              <h1>GALLERIA</h1>
                <div id="Galleria">
                  <div class="Foto">

                  </div>
                </div>
              </section>
            <footer id="Chiusura">
              <div class="Info">
                <div id="Crediti">
                  <div>
                    <h3>FOODLE</h3>
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