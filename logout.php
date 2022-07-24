<?php

include 'config/database.php';

$sql = "UPDATE user SET loggedIN=0 WHERE loggedIN=1";
if(mysqli_query($conn, $sql)){
    echo "LogOut aythu bidu";
    header("location: profile.php");
}

?>