<?php 

require 'db.php';

header('Content-Type: application/json');

$conn=mysqli_connect($database['host'], $database['user'], $database['password'], $database['name']) or die(mysqli_error($conn));

$photo=array();

$query="SELECT * from Immagini";

$res=mysqli_query($conn,$query);

if(mysqli_num_rows($res)>0)
{
    while($data=mysqli_fetch_assoc($res))
    {
        $photo[]=$data;
    }
}   

echo json_encode($photo);
mysqli_close($conn);

?>
