<?php include 'verify.php' ?>

<?php 
$name = "Analitico";
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "1234", "contas");  
      header('Content-Type: text/csv');
      header('Pragma: no-cache');
      header('Content-Transfer-Encoding: UTF-8'); 
      header('Content-Disposition: attachment; filename=analitico.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Id', 'Tipo', 'Valor', 'AnoMesDia', 'Validacao', 'Descricao', 'Parcelado', 'QtdParc', 'nParc', 'anomes', 'parcela', 'usuario', 'flag_prazo', 'Parcial', 'vl_total'));  
      $query = "SELECT * from analise WHERE usuario = '$login_cookie' ORDER BY Id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>