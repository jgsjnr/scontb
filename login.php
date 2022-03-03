<?php
include 'dbconnect.php';
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
include 'dbconnect.php';
$query = "SELECT * FROM auth WHERE user = '$login' AND passwd = '$senha'";
  if (isset($entrar)) {
    if(!$link->query($query)){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php';</script>";
    }
    else{
        setcookie('login', $login, 0, "/");
        header("Location:menu.php");
    }
}
?>