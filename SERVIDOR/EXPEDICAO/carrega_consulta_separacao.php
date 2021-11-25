<div class="fadein">
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
      <th class="text-center">NUMERO SEPARACAO</th>
      <th class="text-center">CLIENTE</th>
      <th class="text-center">ARCA</th>
      <th class="text-center">51</th>
      <th class="text-center">URGENTE</th>
     
	
    </tr>
  </thead>
  <tbody>
<?php

include 'conexaoMysql.php';

$COD_PED = $_POST['COD_PED'];
$sql = "SELECT * FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_PED'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    
  

      if($row['TIPO_TRANSP'] ==  "6"){
        echo "<tr class='bg-danger'>";
      }
      else
      {
        echo "<tr>";
      }

    $COD_PED = $row['COD_PED'];

		echo"<td class='text-center' >".$row['COD_PED']."</a></td>";
 
      echo"<td class='text-center' >".$row['NOME_CLI_FOR']."</a></td>";
    
    echo"<td class='text-center' >".$row['SITUACAO_ARCA']."</a></td>";

    echo"<td class='text-center' >".$row['SITUACAO_51']."</a></td>";
 
  echo"<input type='hidden' id=cod_ped_preferencial value=".$row['COD_PED'].">";
 
    echo"<td class='text-center'><button class='btn btn-warning btn-sm' value=".$row['COD_PED']." onclick='Proc_envia_separacao_preferencial()'><i class='fa fa-plus'></button></a></td>";

    echo"</tr>";	
	
    }
    
} 



else
 {
   echo"<tr>";
 echo "<td>NENHUM REGISTRO ENCONTRADO</td>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td></td>";
 echo"</tr>";

}


$sql = "SELECT * FROM LOGISTICA_SEPARACAO_FRAGMENTADA_AZUL WHERE COD_PED = '$COD_PED'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) 
{
  echo"<center><b>ENVIADO PARA CORTE NO AZUL</b></center>";
}else
{
  echo"<center><b></b></center>"; 
}



 
?>

