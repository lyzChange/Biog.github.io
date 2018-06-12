<?php
    require("./inc/dbcoon.php");
    $phoneNumber = $_GET['phoneNumber'];
    $userName = $_GET['userName'];
    $password = $_GET['password'];
    $sql = "insert into buy (phoneNumber,userName,password) values('$phoneNumber','$userName','$password')";
    $mysqli->query($sql);
    echo "ok";
?>