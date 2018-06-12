<?php
    $severName = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "womai";

    $mysqli = new Mysqli($severName,$username,$password,$dbname);

    mysqli_set_charset($mysqli,"utf8");

    if($mysqli->connect_error){
        echo("错误".$mysqli->connect_error);
    }
?>