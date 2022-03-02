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
    <form action="db_mod.php" method="post">
        <p><strong>Hash:</strong> <br><input type="text" name="hash" class="campo"/></p>
        <p><strong>Tipo:</strong> <br><input type="text" name="tipo" class="campo"/></p>
        <p><strong>Valor:</strong> <br><input type="number" name="valor" class="campo"/></p>
        <p><strong>Ano/Mes/Dia:</strong> <br><input type="date" name="anomesdia" class="campo"/></p>
        <p><strong>Descricao:</strong> <br> <input type="text" name="descricao" class="campo"/></p>
        <p><strong>Parcelado:</strong> <br> </p>
        <select name="parcelado" class="campo"> 
            <option value="sim">Sim</option> 
            <option value="nao">Não</option> 
        </select>
        <p><strong>Quantidade de parcelas:</strong> <br><input type="text" name="qtdparc" class="campo"/></p>
        <p><input type="submit" class="botao" value="Modificar"/></p> <br>
       </form> 
</body>
</html>