<?php
    $mysqli = new Mysqli ("localhost","root","root","womai");
    mysqli_set_charset($mysqli,"utf-8");
    if($mysqli->connect_error){
        echo ("错误：" . $mysqli->connect_error);
    }

    $page = $_GET['page'];
    $size = 5;
    $info = ($page-1) * $size;
    $sql = "select * from fresh limit " . $info ."," .$size;
    $result = $mysqli->query($sql);
       
    if($result->num_rows > 0){
        $success = true;
        while($row = mysqli_fetch_assoc($result)){
            $pro[] = $row;
        }
        $data["proList"] = $pro;
    }else{
        $success = false;
    }
        $data["success"] = $success;
    echo json_encode($data);
?>  