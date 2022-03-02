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
$banco="lancamentos";
$tipo=$_POST['tipo'];
$valor=$_POST['valor'];
$anomesdia=$_POST['anomesdia'];
$descricao=$_POST['descricao'];
$parcelado=$_POST['parcelado'];
$qtdparc=(int)$_POST['qtdparc'];

if($parcelado == "sim"){
    $validacaoString = $tipo."".$valor."".$anomesdia."".$descricao."".$parcelado."".$qtdparc;
    $validacaoHash = hash("sha256", "$validacaoString");
    if(!$link -> query("INSERT INTO lancamentos(Tipo, Valor, AnoMesDia, Validacao, Descricao, Parcelado, QtdParc, nParc) VALUES('$tipo','$valor','$anomesdia','$validacaoHash','$descricao','$parcelado','$qtdparc', '1')")){
        //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
    }
    if(!$link -> query("INSERT INTO hashes VALUES('$anomesdia','$validacaoHash')")){
        echo '<h1>Não foi possível executar sua solicitacao na base de hash</h1><br>';
    }
    echo('<p><strong>Validação: </strong>'.$validacaoHash.'<br>');
    for ($i = 1; $i < $qtdparc; $i++) {
        $tmp_year = date("Y", strtotime($anomesdia));
        $tmp_month = date("m", strtotime($anomesdia)) + $i;
        $tmp_day = date("d", strtotime($anomesdia));
        $date = mktime(0,0,0,$tmp_month,$tmp_day, $tmp_year);
        $final = date("Y-m-d", $date);
        echo $final;
        $validacaoString = $tipo."".$valor."".$anomesdia."".$descricao."".$parcelado."".$qtdparc;
        $validacaoHash = hash("sha256", "$validacaoString");
        $imaisum = $i+1;
        if(!$link -> query("INSERT INTO lancamentos(Tipo, Valor, AnoMesDia, Validacao, Descricao, Parcelado, QtdParc, nParc) VALUES('$tipo','$valor','$final','$validacaoHash','$descricao','$parcelado','$qtdparc', '$imaisum')")){
            //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
        }
        echo('<p><strong>Validação: </strong>'.$validacaoHash.'<br>');
    }
    $link -> close();
}
else{
    $validacaoString = $tipo."".$valor."".$anomesdia."".$descricao."".$parcelado."".$qtdparc;
    $validacaoHash = hash("sha256", "$validacaoString");
    if(!$link -> query("INSERT INTO lancamentos(Tipo, Valor, AnoMesDia, Validacao, Descricao, Parcelado, QtdParc, nParc) VALUES('$tipo','$valor','$anomesdia','$validacaoHash','$descricao','$parcelado','$qtdparc', '1')")){
        //echo '<h1>Não foi possível executar sua solicitacao</h1><br>' ;
    }
    if(!$link -> query("INSERT INTO hashes VALUES('$anomesdia','$validacaoHash')")){
        echo '<h1>Não foi possível executar sua solicitacao na base de hash</h1><br>';
    }
    echo('<p><strong>Validação: </strong>'.$validacaoHash.'<br>');
    $link -> close();
}
?>
<p><string><a href="./index.php">Voltar</a></strong>
</body>
</html>

