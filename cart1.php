<?php  
include 'config/database.php';
echo $_SERVER['REQUEST_URI'];
$product_id = $_REQUEST['id'];
$sql1 = "SELECT * FROM  products WHERE product_id='$product_id'";
$resulkt = mysqli_query($conn, $sql1);
$prod_lis =  mysqli_fetch_all($resulkt, MYSQLI_ASSOC);
echo $product_id;
$sql2 = "SELECT * FROM cart WHERE product_id='$product_id'";
$result =  mysqli_query($conn, $sql2);
$rows = mysqli_num_rows($result);
if($rows!=0){
    
} else {
    foreach ($prod_lis as $item) : 
    $name = $item['product_name'];
    $price = $item['price'];
    $image = $item['image'];
    $id = $item['product_id'];
    $sql = "INSERT INTO cart(product_id, imag, nam, price) values('$id', '$image', '$name', '$price')";

    if(mysqli_query($conn, $sql)){
        echo "Success";
    } else {
        echo 'eno error agide';
    }
    endforeach;
}
//header("location: devices.php");
?>