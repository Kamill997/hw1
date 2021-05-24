<?php

require 'db.php';

require 'session.php';

require 'session_cart.php';


if(isset($_SESSION['cart']))
$cart=$_SESSION['cart'];

if(isset($_POST["pid"]) && isset($_POST["pnome"]) && isset($_POST["pprezzo"]) && isset($_POST["pImg"]))
{
    
    $id=mysqli_real_escape_string($conn,$_POST['pid']);
    $nome=mysqli_real_escape_string($conn,$_POST['pnome']);
    $prezzo=mysqli_real_escape_string($conn,$_POST['pprezzo']);
    $Img=mysqli_real_escape_string($conn,$_POST['pImg']);
    $quantita=1;

    $res=mysqli_query($conn,"SELECT ID_Cibo from carrello where ID_Cibo='$id' AND ID_Utente='$cart'");

    if(mysqli_num_rows($res)>0)
    {
        $return=array("exists"=>true);
        echo json_encode($return);
    } 
    else
    {
        mysqli_query($conn,"INSERT INTO carrello (ID_Cibo ,ID_Utente, Prezzo_Cibo , Nome_Cibo , Img_Cibo , Quantita , Tot) 
        VALUES ('$id','$cart','$prezzo','$nome','$Img','$quantita','$prezzo')");

        $return=$return=array("exists"=>false);
        echo json_encode($return);
        mysqli_close($conn);
    }
}


else if(isset($_POST['cart']) && isset($_POST['pprezzo']) && isset($_POST['qnt']))
{
    $carrello=mysqli_real_escape_string($conn,$_POST['cart']);
    $prezzo=mysqli_real_escape_string($conn,$_POST['pprezzo']);
    $quantita=mysqli_real_escape_string($conn,$_POST['qnt']);
    $tot=$quantita*$prezzo;

    mysqli_query($conn,"UPDATE carrello SET Quantita='$quantita',Tot='$tot' WHERE ID='$carrello'");

    mysqli_close($conn);
}
else
    echo "ERRORE";



/*if(isset($_GET["id_cibo"]) && isset($_GET["nome"]) && isset($_GET["prezzo"]) && isset($_GET["img"]) && isset($_GET["qnt"]))
{

    $conn=mysqli_connect($database['host'], $database['user'], $database['password'], $database['name']) or die(mysqli_error($conn));

    $id=mysqli_real_escape_string($conn,$_GET["id_cibo"]);
    $nome=mysqli_real_escape_string($conn,$_GET["nome"]);
    $prezzo=mysqli_real_escape_string($conn,$_GET["prezzo"]);
    $Img=mysqli_real_escape_string($conn,$_GET["img"]);
    $quantita=mysqli_real_escape_string($conn,$_GET["qnt"]);


    $uid=mysqli_real_escape_string($conn,$_SESSION['username']);
    $tot=$prezzo*$quantita;

    echo $id;

    mysqli_query($conn,"INSERT INTO carrello (ID_Cibo , ID_Utente , Prezzo_Cibo , Nome_Cibo , Img_Cibo , Quantita , Tot) 
    VALUES ('$id','$uid','$prezzo','$nome','$Img','$quantita','$tot')");

    mysqli_close($conn);
}*/

?>