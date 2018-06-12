<?php
    require("./libs/Smarty.class.php");
    $smarty = new Smarty();

    $mysqli = new Mysqli ("localhost","root","root","womai");
    mysqli_set_charset($mysqli,"utf-8");
    if($mysqli->connect_error){
        echo ("错误：" . $mysqli->connect_error);
    }

    $sql = "select * from fresh limit 0,5";
    $result = $mysqli->query($sql);
       
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
   
    $smarty -> assign("product",$data);
    $smarty -> display("dailyfresh.tpl");
?>  