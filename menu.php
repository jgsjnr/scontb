<!DOCTYPE html>
<?php include 'verify.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contabil.css">
    <title>Sistema Contabil</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div align="center">
        <h1 id="titulo">Cadastro de Valores</h1>
        <p id="subtitulo">Insira as informações abaixo</p>
        <br>
    </div>
    <div align="center">
        <a href="input.php" class="btn btn-success">Inserir</a>
        <a href="mod.php" class="btn btn-warning">Modificar</a>
        <a href="del.php" class="btn btn-danger">Deletar</a>
        <a href="vis.php" class="btn btn-info">Visualizar</a>
    </div>
    <p><?php echo "<p> $login_cookie </p>"; ?><string><a href="./logout.php">Deslogar</a></strong>
</body>
</html>