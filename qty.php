<?php

include 'config/database.php';
echo $_SERVER['REQUEST_URI'];
$id = $_REQUEST["id"];
echo $id;
$qty = $_REQUEST["qty"];
echo $qty;
$sql1 = "UPDATE cart SET qty='$qty' where product_id='$id'";

if(mysqli_query($conn, $sql1)){
    echo 'done';
}

?>