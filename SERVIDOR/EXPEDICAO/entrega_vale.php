

<div class="fadein">
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
      <th class="text-center">NOME CLIENTE</th>
      <th class="text-center">NUMERO</th>
      <th class="text-center">MOTORISTA</th>
     
    </tr>
  </thead>
  <tbody>


<div class="produto" id="produto">

<?php
include 'conexaoFirebird.php';

$EMPRESA = $_POST['EMPRESA'];

$COD_VALE = $_POST['COD_VALE'];

  $query = "SELECT * FROM VALES WHERE COD_VALE = $COD_VALE AND COD_EMP = $EMPRESA ";
		$data = $connect->query($query);
		
		
		foreach($data as $row){
			echo "<td class='text-center'>".$row['NOME_CLIENTE']."</td>";
      echo "<td class='text-center'>".$row['COD_VALE']."</td>";
      echo "<td class='text-center'><button class='btn btn-success btn-sm' id='botao_envia_motorista_vale' type='submit' onclick='Processo_envia_entrega_vale()'><b><i class='fa fa-check' autofocus></i> </b></button></td>";
      echo" <input type=hidden  id=NOME_CLIENTE_VALE id=input value='".$row['NOME_CLIENTE']."'>";
      echo" <input type=hidden  id=COD_VALE id=input value=".$row['COD_VALE'].">";
      echo" <input type=hidden  id=COD_CLI id=input value=".$row['COD_CLI'].">";
      echo" <input type=hidden  id=COD_EMP id=input value=".$row['COD_EMP'].">";
			echo"
			</tr>
			</tbody>
			</table>";	
		}
		
