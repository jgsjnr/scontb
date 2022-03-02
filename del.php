<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contabil.css">
    <title>Sistema Contabil</title>
</head>
<body>
    <div>
        <h1 id="titulo">Cadastro de Valores</h1>
        <p id="subtitulo">Insira as informações abaixo</p>
        <br>
    </div>
    <form action="db_del.php" method="post">
        <p><strong>Hash:</strong> <br><input type="text" name="hash" class="campo"/></p>
        <p><input type="submit" class="botao" value="Deletar"/></p> <br>
       </form> 
</body>
</html>