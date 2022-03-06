<?php
include 'dbconnect.php';
$login = $_POST['login'];
$senha = $_POST['senha'];
include 'dbconnect.php';
$query = "SELECT user, passwd FROM auth WHERE user = '$login' AND passwd = '$senha'";
$result = $link->query($query);
if ($result->num_rows != 1) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php';</script>";
}
else{
    setcookie('login', $login, 0, "/");
    header("Location:menu.php");
}
?>