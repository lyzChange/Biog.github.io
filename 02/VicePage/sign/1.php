<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <?php
      session_start();
      if(isset($_SESSION["name"])){
          echo "<b>欢迎你！<a>" .$_SESSION["name"]."</a> &nbsp; <a href='?logout'>注销</a></b>"; 
      }else{
          echo' <a href="Apply.html"  style="color:yellow">注册</a> <a href="Login.html" >登录</a>';
      }
      if(isset($_GET["logout"])){    //isset 检查变量是否设置
          unset($_SESSION["name"]);  //unset 销毁指定变量
          session_destroy();   //注销session
      } 
    ?>
  </body>
</html>