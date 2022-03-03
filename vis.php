<?php 
     include 'verify.php';
     $connect = mysqli_connect("localhost", "root", "1234", "contas");  
     $query ="SELECT * FROM analise WHERE nParc = 1 ORDER BY Id desc";
     $dropAnalise = "DROP TABLE IF EXISTS analise";
     $makeAnalise = "CREATE TABLE analise AS (SELECT *, CASE WHEN QtdParc > 1 THEN 'Parcelado' ELSE 'A vista' END AS flag_prazo, CASE WHEN QtdParc = nParc THEN 'Final' WHEN nParc = 1 THEN 'Inicial' ELSE 'Parcial' END AS Parcial, CASE WHEN nParc = 1 THEN Valor END AS vl_total FROM lancamentos)";
     $result = mysqli_query($connect, $dropAnalise);
     $result = mysqli_query($connect, $makeAnalise);
     $result = mysqli_query($connect, $query);  
?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Visualização dos dados</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:100%;">  
                <h2 align="center">Exportar os arquivos em CSV</h2>  
                <h3 align="center">Analítico de Gastos</h3>                 
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Id</th>  
                               <th width="25%">Tipo</th>  
                               <th width="35%">Valor</th>  
                               <th width="10%">AnoMesDia</th>  
                               <th width="20%">Validacao</th>  
                               <th width="5%">Descricao</th>
                               <th width="5%">Parcelado</th>
                               <th width="5%">QtdParc</th>
                               <th width="5%">nParc</th> 
                               <th width="5%">anomes</th>
                               <th width="5%">flag_prazo</th> 
                               <th width="5%">Parcial</th> 
                               <th width="5%">vl_total</th>
                               <th width="5%">Parcela</th>
                               <th width="5%">Usuario</th>
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["Id"]; ?></td>  
                               <td><?php echo $row["Tipo"]; ?></td>  
                               <td><?php echo $row["Valor"]; ?></td>  
                               <td><?php echo $row["AnoMesDia"]; ?></td>  
                               <td><?php echo $row["Validacao"]; ?></td>  
                               <td><?php echo $row["Descricao"]; ?></td>
                               <td><?php echo $row["Parcelado"]; ?></td>
                               <td><?php echo $row["QtdParc"]; ?></td>
                               <td><?php echo $row["nParc"]; ?></td>
                               <td><?php echo $row["anomes"]; ?></td>
                               <td><?php echo $row["flag_prazo"]; ?></td>
                               <td><?php echo $row["Parcial"]; ?></td>
                               <td><?php echo $row["vl_total"]; ?></td>
                               <td><?php echo $row["parcela"]; ?></td>
                               <td><?php echo $row["usuario"]; ?></td>
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div> 
           <p><?php echo "<p> $login_cookie </p>"; ?><string><a href="./logout.php">Deslogar</a></strong>
      </body>  
 </html>