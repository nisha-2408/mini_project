<?php
include 'config/database.php';

$uname = $_REQUEST['uname'];
$password = $_REQUEST['password'];

if($uname==""||$password==""){
    echo "Please enter";
} else {
    $sql = "SELECT * FROM user WHERE username = '$uname'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    if($rows!=0){
        $sql1 = "SELECT * FROM user WHERE username = '$uname' and passwor = '$password'";
        $result1 = mysqli_query($conn, $sql1);
        $row = mysqli_num_rows($result1);
        if($row!=0){
            $sql2 = "UPDATE user SET loggedIN=1 WHERE username = '$uname'";
            if(mysqli_query($conn, $sql2)){
                echo 'Login aythu';
                header("Location: index.php");
            }
        } else {
            echo 'wrong password re';
        }
    }
}
