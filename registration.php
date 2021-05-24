<?php
    require 'db.php';

    session_start();

    if(isset($_SESSION['username']))
    {
      header("Location:index.php");
      exit;
    }   

    if(!empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']))
    {      
        $conn=mysqli_connect($database['host'], $database['user'], $database['password'], $database['name']) or die(mysqli_error($conn));

        $error=array();

        $username = mysqli_real_escape_string($conn, $_POST["username"]);

        $check_username= "SELECT username from utente where username='$username'";
        $res_usr=mysqli_query($conn,$check_username);

        if(mysqli_num_rows($res_usr) > 0)
        {
            $error[] = "username già in uso";
        }

        
        if(strlen($_POST['password'])<8)
        {
            $error[] = "Caratteri password minimo 8";
        }

        $email= mysqli_real_escape_string($conn, $_POST["email"]);

        $check_email="SELECT email from utente where email='$email'";

        $res_ema=mysqli_query($conn,$check_email);

        if(mysqli_num_rows($res_ema) >0 )
        {
            $error[] = "email già in uso";
        }

        if(count($error)==0)
        {
            $nome = mysqli_real_escape_string($conn,$_POST["nome"]);
            $cognome = mysqli_real_escape_string($conn,$_POST["cognome"]);
            $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

            $query    = "INSERT into utente (username,password,email,nome,cognome)
                     VALUES ('$username','$password','$email','$nome','$cognome')";

            $result   = mysqli_query($conn, $query);

            if ($result) 
            {  
                echo "<div class='form'>
                <h3>Registrazione avvenuta correttamente.</h3><br/>
                </div>";
                header("Location: login.php");
            }
            else {
                echo "<div class='form'>
                      <h3>Required fields are missing.</h3><br/>
                      <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                      </div>";
            }
        }
    }
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Registrazione</title>
    <link rel="stylesheet" href="css/registration.css"/>

    <script src="scripts/registration.js" defer></script>
</head>
<body>

<section class="credenziali">
<form class="form" method="post">
        <h1 class="title">Registrazione</h1>
        <div class="Nomi">
            <div class="Nome">
                <div><input type="text" class="login-input" name="nome" placeholder="Nome" <?php if(isset($_POST["nome"])){echo "value=".$_POST["nome"];} ?>></div>
                <span>Inserisci Nome</span>
            </div>
            <div class="Cognome">
                <div><input type="text" class="login-input" name="cognome" placeholder="Cognome" <?php if(isset($_POST["Cognome"])){echo "value=".$_POST["Cognome"];} ?>></div>
                <span>Inserisci Cognome</span>
            </div>
        </div>
        <div class="Username">
            <div><input type="text" class="login-input" name="username" placeholder="Username" <?php if(isset($_POST["Username"])){echo "value=".$_POST["Username"];} ?>></div>
            <span>Username utilizzato</span>
        </div>
        <div class="Email">
            <div><input type="text" class="login-input" name="email" placeholder="Email" <?php if(isset($_POST["Email"])){echo "value=".$_POST["Email"];} ?>></div>
            <span>Email non valida</span>
        </div>
        <div class="Password">
            <div><input type="password" class="login-input" name="password" placeholder="Password" <?php if(isset($_POST["Password"])){echo "value=".$_POST["Password"];} ?>></div>
            <span>Password debole</span>
        </div>
        <div class="submit">
            <input type="submit" id="submit" name="submit" value="Registrati">
        </div>
        <p class="link">Hai già un account? <a href="login.php">Login</a></p>
    </form>

</section>
</body>
</html>
