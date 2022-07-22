<?php  
include 'config/database.php';
$product_id = $_POST['product_id'];
$qty = $_POST['qty'];
echo $qty;
$sql1 = "UPDATE products SET qty='$qty' where product_id='$product_id'";
$result1 = mysqli_query($conn, $sql1); 
$sql = "INSERT INTO cart (product_id) values('$product_id')";
$sql2 = "SELECT * FROM cart WHERE product_id='$product_id'";
$result =  mysqli_query($conn, $sql2);
$rows = mysqli_num_rows($result);
if($rows!=0){
    echo 'Exists';
} else {
    if(mysqli_query($conn, $sql)){
        echo "Success";
    }
}
//header("location: devices.php");
?>