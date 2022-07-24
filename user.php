<?php include 'config/database.php';
$loggedIN=false;

$name = $_POST['uname'];
$password = $_POST['password'];
$email = $_POST['mail'];

if($name==""||$password==""||$email==""){
    echo "Please enter";
}
else {

    $sql1 = "SELECT * FROM user WHERE username = '$name'";
    $result = mysqli_query($conn, $sql1);
    $rows = mysqli_num_rows($result);
    $sql2 = "SELECT * FROM user WHERE email = '$email'";
    $result1 = mysqli_query($conn, $sql2);
    $row = mysqli_num_rows($result1);
    if($row!=0){
        echo 'email already exists';
    } else if($rows!=0) {
        echo 'uname already exixsts';
    } else {
        $sql = "INSERT INTO user(username, email, passwor) VALUES('$name', '$email', '$password')";
        if(mysqli_query($conn, $sql)) {
            echo "Successfully logged in";
            header("location: login.php");
        }
    }

}
