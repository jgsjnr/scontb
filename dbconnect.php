<?php
$link = new mysqli('localhost:3306', 'root', '1234', 'contas');
if ($link -> connect_errno){
    echo ('<h1>Não conseguiu se conectar: </h1>' . $link -> connect_error . '<br>');
    exit();
}else{
    echo '<h1>Conexão bem sucedida: </h1><br>';
}
?>