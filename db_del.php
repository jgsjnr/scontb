<?php include 'verify.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contabil.css">
    <title>Finalização</title>
</head>
<body>
<?php
$link = new mysqli('localhost:3306', 'root', '1234', 'contas');
if ($link -> connect_errno){
    echo ('<h1>Não conseguiu se conectar: </h1>' . $link -> connect_error . '<br>');
    exit();
}else{
    echo '<h1>Conexão bem sucedida: </h1><br>';
}
$hashmod=$_POST['hash'];
if(!$link -> query("DELETE FROM lancamentos WHERE Validacao = '$hashmod'")){
    //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
    if(!$link -> query("DELETE FROM hashes WHERE hash = '$hashmod'")){
        //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
    }
}
else{
    echo '<h1>Deletamento bem sucedido</h1><br>' ;
}
$link -> close();
echo $hashmod;
?>
<p><string><a href="./del.php">Voltar</a></strong>
<p><?php echo "<p> $login_cookie </p>"; ?><string><a href="./logout.php">Deslogar</a></strong>
</body>
</html>

