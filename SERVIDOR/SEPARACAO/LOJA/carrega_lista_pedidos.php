
<div class="fadein">
    
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
      <th class="text-center">NUMERO SEPARACAO</th>
      <th class="text-center">CLIENTE</th>
	  <th class="text-center">DATA</th>
      <th class="text-center">SEPARADOR</th>
      <th class="text-center">REMOVER</th>
	
    </tr>
  </thead>
  <tbody>
<?php
include 'conexaoMysql.php';
$sql = "SELECT*FROM logistica_separacao ORDER BY id DESC LIMIT 1000";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    
    $id = $row['id'];

      echo"<form action='/mobile/SEPARACAO/PEDIDO/' method='POST'>";
$SEPARADOR = strtoupper($row['SEPARADOR']);
		echo"<tr>";
		echo"<td class='text-center' >".$row['COD_PED']."</a></td>";
			
		if($row['COD_CLI'] == "34220"){ //SE FOR CLIENTE VENDA BALCAO.
	    echo"<td class='text-center' >".$row['COMPRADOR']." ".$row['NOME_CLI_FOR']."</a></td>";
		}
		elseif($row['TIPO_TRANSP'] == "6"){ //SE FOR TIPO TRANSPORTE BALCAO.
			echo"<td class='text-center' >".$row['NOME_CLI_FOR']."</a></td>";
		}
		else{
			echo"<td class='text-center' >".$row['NOME_CLI_FOR']."</a></td>";
		}
		echo"<td class='text-center' >".$row['DATA']."</a></td>";
		if($row['ENVIADO_SEPARACAO'] ==  "SIM") //SE O SEPARADOR MARCOU CORRETAMENTE O ITEM AREA51
		{
		echo"<td class='text-center' >".$SEPARADOR." ENVIOU PARA SEPARAÇÃO</a></td>"; //MOSTRA O NOME DO SEPARADOR QUE ENVIOU.
	}else
	{
		echo"<td class='text-center' >".$SEPARADOR."</a></td>";// SE NAO ENVIOU, SOMENTE APARACE O NOME DO SEPARADOR
  }
  echo"<td class='text-center'><button class='btn btn-danger btn-sm' type='submit' value='".$id."' onclick='Proc_remove_separacao(this)'><i class='fa fa-remove'></button></td>";
  echo"<input type='hidden' name=cod_ped value=".$row['COD_PED'].">";
    echo"</form>";
    echo"</tr>";	
	
    }
} else {

}

mysqli_close($conn);
   
  ?>

  </tr>
        </tbody>
  </tbody>


  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>