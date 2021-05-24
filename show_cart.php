<?php

require 'db.php';

require 'session.php';

require 'session_cart.php';

if(isset($_SESSION['cart']))
$cart=$_SESSION['cart'];

header('Content-Type: application/json');


$item=array();
$res=mysqli_query($conn,"SELECT * from carrello where ID_Utente='$cart'");

if(mysqli_num_rows($res)>0)
{
    while($data=mysqli_fetch_assoc($res))
    {
        $item[]=$data;
    }
}   


echo json_encode($item);
mysqli_close($conn);
?>