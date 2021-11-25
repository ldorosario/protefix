<?php 
  include 'conexaoMysql.php';
  $sql = "SELECT*FROM soma_cheque WHERE id LIKE '1'";

  $resultado = mysqli_query($conn, $sql);
  
  if(mysqli_num_rows($resultado) > 0)
  {
      while($row = mysqli_fetch_assoc($resultado))
      {
          $valor_soma = $row['valor_soma'];
        

          echo  number_format($valor_soma / 100,2,".",",");
       
      }
  }
  ?>