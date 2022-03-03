<?php 
include 'verify.php';
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
      fputcsv($output, array('Id', 'Tipo', 'Valor', 'AnoMesDia', 'Validacao', 'Descricao', 'Parcelado', 'QtdParc', 'nParc','anomes', 'flag_prazo', 'Parcial', 'vl_total', 'parcela', 'usuario'));  
      $query = "SELECT * from analise ORDER BY Id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>