<?php
    // 连接数据库
    require ("./inc/dbcoon.php");
    // 接受参数
    $username = $_GET['userName'];
    // 相关操作
    $sql = "select userName from buy where userName = '$username'";
    // 查找数据库
    $result = $mysqli->query($sql);

    if($result->num_rows > 0){
        $error = 1;
    }else{
        $error = 0;
    }
    echo $error;
?>