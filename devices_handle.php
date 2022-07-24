<?php include 'config/database.php';
$aDoor = $_POST['formDoor'];
if (empty($aDoor)) {
    echo ("You didn't select any brand.");
} else {
    $N = count($aDoor);

    echo ("You selected $N door(s): ");
    for ($i = 0; $i < $N; $i++) {
        $like = $aDoor[$i];
        $sql = "SELECT * FROM products WHERE product_name LIKE '$like%'";
        $result = mysqli_query($conn, $sql);
        $prod_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if (empty($prod_list)) {
            echo 'Null';
        } else {

            foreach ($prod_list as $item) :
                echo $item['product_name'];
            endforeach;
            echo ($aDoor[$i] . " ");
        }
    }
}
?>
