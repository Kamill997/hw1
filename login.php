<?php
    require 'db.php';
    
    session_start();

    if(isset($_SESSION['username']))
    {
      header("Location:index.php");
      exit;
    }

    if (!empty($_POST['username']) && !empty($_POST['password']))
    {

        $conn=mysqli_connect($database['host'], $database['user'], $database['password'], $database['name']) or die(mysqli_error($conn));

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password=md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        
  

        $query    = "SELECT * FROM utente WHERE username='$username' AND password='$password'";

        $res = mysqli_query($conn, $query);


        if (mysqli_num_rows($res) > 0) 
        {
            $row=mysqli_fetch_assoc($res);
            
                $_SESSION['username'] = $row['Username'];
                header("Location: index.php");
            
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/registration.css"/>
</head>
<body>
<section class="credenziali">
    <form class="form" method="post" name="login">
        <h1 class="title">Login</h1>
        <div class="username">
          <div><input type="text" class="login-input" name="username" placeholder="Username"/></div>
        </div>
        <div class="password"> 
          <div><input type="password" class="login-input" name="password" placeholder="Password"/></div>
        </div>
        <div class="submit">
          <div><input type="submit" value="Login" name="submit"/></div>
        </div>
        <p class="link">Non hai un account? <a href="registration.php">Registrati Adesso</a></p>
  </form>
</section>
</body>
</html>
