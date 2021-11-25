

<div class="fadein">
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
      <th class="">CLIENTE</th>
      <th class="">NF-E</th>
	  <th class="">DATA EMISSAO</th>
	  <th class="">CANCELAMENTO</th>
    </tr>
  </thead>
  <?php
include 'conexaoMysql.php';

$NUM_NOTA = $_POST['NUM_NOTA'];

$sql = "SELECT*FROM nfe_cancelada WHERE NUM_NOTA = '$NUM_NOTA'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo"<tr>";
 
  echo "<tr>";

   echo "<td>".$row['NOME_CLI_FOR']."</td>"; 
   echo "<td>".$row['NUM_NOTA']."</td>"; 
   
   //conversao de data 
 $data_original2 = $row['DATA_EMISSAO'];
 
 $timestamp2 = strtotime($data_original2);
 
 $nova_data2 = date("d-m-Y", $timestamp2);
 //fim da conversao 
 echo "<td>".$nova_data2."</td>"; 

 //conversao de data 
 $data_original = $row['DATA_CANCELADA'];
 
 $timestamp = strtotime($data_original);
 
 $nova_data = date("d-m-Y", $timestamp);
 //fim da conversao 
 if($row['DATA_CANCELADA'] =="")
 {
   echo "<td>NOTA DE ENTRADA</td>";

 }
 else
 {
  echo "<td>".$nova_data."</td>"; 

 }

 echo "</tr>";
echo"</tbody>";
echo"</table>";
 echo"<textarea class='form-control'  id=INFO_ADC rows=4 cols=150>".$row['INFO_ADC']."</textarea>";
 echo"<hr>";
 echo" <input type=hidden  id=NOME_CLI_FOR id=input value='".$row['NOME_CLI_FOR']."'>";
 echo" <input type=hidden  id=NUM_NOTA id=input value='".$row['NUM_NOTA']."'>";
 echo" <input type=hidden  id=DATA_CANCELADA id=input value='".$row['DATA_CANCELADA']."'>";
 echo" <input type=hidden  id=DATA_EMISSAO id=input value='".$row['DATA_EMISSAO']."'>";
 echo" <input type=hidden  id=SITUACAO id=input value='".$row['SITUACAO']."'>";
 
 
 echo"</form>";
 
 }
 
}
 
 ?>
 
</div>
</div>
</div>

</div>