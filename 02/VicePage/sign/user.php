<?php
    header("Content-type:text/html;charset=utf-8");
    $name = $_POST['userName'];
    $pwd = $_POST['password'];
    $result=mysqli_connect("localhost","root","root","buy");
    if(!$result){
      die("连接失败！");
    }
    mysqli_set_charset($result, "utf8");
    $sql="select * from user where name='".$name."' and pwd='".$pwd."'";
    $data=mysqli_query($result,$sql);
    if(mysqli_num_rows($data)>0){
      $flag=2;
      session_start();
      $_SESSION['name']=$name;
    }else{
      $flag=1;
    }
    echo $flag;
?>