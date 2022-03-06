<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
    }else{
      header("Location: index.php", true, 301);
      exit();
    }
?>