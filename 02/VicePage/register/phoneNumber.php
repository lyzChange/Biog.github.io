<?php
    // 连接数据库
    require ("./inc/dbcoon.php");
    // 接受参数
    $number = $_GET['phoneNumber'];
    // 相关操作
    $sql = "select phoneNumber from buy where phoneNumber = '$number'";
    // 查找数据库
    $result = $mysqli->query($sql);

    if($result->num_rows > 0){
        $error = 1;
    }else{
        $error = 0;
    }
    echo $error;
?>