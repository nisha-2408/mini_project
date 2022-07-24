<?php

include 'config/database.php';
$id = $_REQUEST["id"];

$sql = "DELETE FROM cart WHERE product_id = '$id'";
if(mysqli_query($conn, $sql)){
    echo 'deleted';
}

 ?>