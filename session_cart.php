<?php

    require 'db.php';

    $conn=mysqli_connect($database['host'], $database['user'], $database['password'], $database['name']) or die(mysqli_error($conn));

    if(isset($_SESSION['username']))
    $uid=$_SESSION['username'];

    if(!isset($_SESSION['cart']))
    {
      $res=mysqli_query($conn,"SELECT ID from utente where Username='$uid'");

      if (mysqli_num_rows($res) > 0) 
          {
              $row=mysqli_fetch_assoc($res);
  
              $_SESSION['cart']=$row['ID'];
          }
    }
?>