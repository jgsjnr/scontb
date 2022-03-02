<?php  
 $connect = mysqli_connect("localhost", "root", "1234", "contas");  
 $query ="SELECT * FROM lancamentos ORDER BY Id desc";  
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
                <h2 align="center">Export Mysql Table Data to CSV file in PHP</h2>  
                <h3 align="center">Employee Data</h3>                 
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
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>