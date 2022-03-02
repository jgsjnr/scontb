<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "1234", "contas");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Id', 'Tipo', 'Valor', 'AnoMesDia', 'Validacao', 'Descricao', 'Parcelado', 'QtdParc', 'nParc'));  
      $query = "SELECT * from lancamentos ORDER BY Id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>