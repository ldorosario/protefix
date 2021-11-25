
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

ini_set('display_errors', 0); //ESCONDE $_GET['ERRO'] QUANDO VAZIO;


  $EMPRESA = $_POST['empresa'];
  $cod_ped = $_POST['cod_ped'];

$query = "SELECT  DOCS_SAIDA.NUM_NOTA,DOCS_SAIDA.DT_EMISSAO, DOCS_SAIDA.COD_EMP, DOCS_SAIDA.CHAVE_ACESSO, DOCS_SAIDA.COD_CLI, DOCS_SAIDA.NUM_PEDIDO, CLI_FOR.COD_CLI_FOR, CLI_FOR.NOME_CLI_FOR
FROM DOCS_SAIDA INNER JOIN CLI_FOR ON (CLI_FOR.COD_CLI_FOR = DOCS_SAIDA.COD_CLI) WHERE  DOCS_SAIDA.NUM_PEDIDO = $cod_ped AND DOCS_SAIDA.COD_EMP = $EMPRESA";
$data = $connect->query($query);

foreach($data as $row){

	if($row['COD_CLI'] =="34220")
	{
		echo "<td class='text-center'>".$row['NOME_CLI_FOR']." ".$row['COMPRADOR']."</td>";
	}
	else
{
echo "<td class='text-center'>".$row['NOME_CLI_FOR']."</td>";
}
echo "<td class='text-center'>".$row['NUM_PEDIDO']."</td>";

echo "<td class='text-center'><button class='btn btn-success btn-sm' onclick='Processo_envia_entrega_pedido()' id='botao_envia_motorista'><b><i class='fa fa-check' ></i> </b></button></td>";
echo" <input type=hidden  id=NOME_CLI_FOR_PEDIDO  value='".$row['NOME_CLI_FOR']."'>";
echo" <input type=hidden  id=NUM_PEDIDO_PEDIDO  value=".$row['NUM_PEDIDO'].">";
echo" <input type=hidden  id=NUM_NOTA_PEDIDO  value=".$row['NUM_NOTA'].">";
echo" <input type=hidden  id=MOTORISTA_PEDIDO  value=".$MOTORISTA.">";
echo" <input type=hidden  id=EMPRESA_PEDIDO  value=".$EMPRESA.">";
echo" <input type=hidden  id=CHAVE_ACESSO_PEDIDO  value=".$row['CHAVE_ACESSO'].">";
echo" <input type=hidden  id=COD_CLI_PEDIDO  value=".$row['COD_CLI'].">";
echo" <input type=hidden  id=DT_EMISSAO_PEDIDO  value=".$row['DT_EMISSAO'].">";
echo" </form>";

echo"
</tr>
</tbody>
</table>";
}