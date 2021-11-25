<?php
include 'conexaoMysql.php';  
date_default_timezone_set('America/Sao_Paulo');

$data = date('d-m-Y');

$sql = "SELECT COUNT(id) AS total FROM cadastrocliente WHERE status LIKE 'EM ANALISE'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  
   echo $row['total'];

}
}
else
{
  
}

mysqli_close($conn);
 