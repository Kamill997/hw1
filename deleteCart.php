<?php

require 'db.php';

require 'session.php';

require 'session_cart.php';

if(isset($_SESSION['cart']))
$cart=$_SESSION['cart'];


if(isset($_GET['delete']))
{
    $id=mysqli_real_escape_string($conn,$_GET['delete']);

    $res=mysqli_query($conn,"DELETE FROM carrello where ID_Cibo='$id'");

    mysqli_close($conn);
}
else if(isset($_GET['clear']))
{
    $res=mysqli_query($conn,"DELETE FROM carrello where ID_Utente='$cart'");

    mysqli_close($conn);
}
else
    echo "ERRORE";
