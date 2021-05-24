<?php

require 'db.php';

header('Content-Type: application/json');

$conn=mysqli_connect($database['host'], $database['user'], $database['password'], $database['name']) or die(mysqli_error($conn));

$food=array();

/*$key='39669bcae60bef89c7b526135bc2a819';
$app_id='3805f8bf';

$url='https://api.edamam.com/search?q='.$query.'&app_id='.$app_id.'&app_key='.$key;*/

$query="SELECT * from menu LIMIT 9";

$res=mysqli_query($conn,$query);

if(mysqli_num_rows($res)>0)
{
    while($data=mysqli_fetch_assoc($res))
    {
        $food[]=$data;

    }
}

echo json_encode($food);
mysqli_close($conn);
?>