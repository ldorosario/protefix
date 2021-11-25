
<div class="fadein">
<table id="myTable2" class="table table-hover" >
  <thead>
    <tr>
      <th class="text-center">NUMERO</th>
      <th class="text-center">NOME CLIENTE</th>
      <th class="text-center">TRANSPORTE</th>
      <th class="text-center">SEPARADOR</th>
      <th class="text-center">ENVIAR</th>
     
    </tr>
  </thead>
  <tbody>


<div class="produto" id="produto">

<?php 
include 'conexaoFirebird.php';



  $EMPRESA = $_POST['empresa'];
  $COD_PED = $_POST['cod_ped'];

$query = "SELECT CLI_FOR.COD_CLI_FOR, PEDIDOS.COD_CLI,PEDIDOS.USU_INCLUI, CLI_FOR.NOME_CLI_FOR,PEDIDOS.COD_EMP,PEDIDOS.COD_PED,PEDIDOS.TIPO_TRANSP,PEDIDOS.DT_EMISSAO FROM PEDIDOS INNER JOIN CLI_FOR ON (CLI_FOR.COD_CLI_FOR = PEDIDOS.COD_CLI) WHERE PEDIDOS.COD_PED = $COD_PED AND PEDIDOS.COD_EMP = $EMPRESA ORDER BY PEDIDOS.COD_PED DESC";

$data = $connect->query($query);

foreach($data as $row){

  $TIPO_TRANSP = $row['TIPO_TRANSP'];

  if($TIPO_TRANSP == "1"){$TIPO_TRANSP ="RETIRA";}
  if($TIPO_TRANSP == "2"){$TIPO_TRANSP ="PROTEFIX";}
  if($TIPO_TRANSP == "3"){$TIPO_TRANSP ="MOTOBOY";}
  if($TIPO_TRANSP == "4"){$TIPO_TRANSP ="TRANSPORTADORA";}
  if($TIPO_TRANSP == "5"){$TIPO_TRANSP ="FICOFIX";}
  if($TIPO_TRANSP == "6"){$TIPO_TRANSP ="BALCAO";}
  



echo "<tr>";

echo "<td class='text-center' >".$row['COD_PED']."</td>";
echo "<td class='text-center' >".$row['NOME_CLI_FOR']."</td>";
echo "<td class='text-center' >".$TIPO_TRANSP."</td>";
echo "<td class='text-center' ><input type='text' id='SEPARADOR' /></td>";

echo "<td class='text-center'><button class='btn btn-success btn-sm' onclick='Proc_envia_pedido()' id=''><b><i class='fa fa-check' ></i> </b></button></td>";

echo" <input type=hidden  id=NOME_CLI_FOR_PEDIDO  value='".$row['NOME_CLI_FOR']."'>";
echo" <input type=hidden  id=EMPRESA_PEDIDO  value=".$EMPRESA.">";
echo" <input type=hidden  id=COD_CLI_PEDIDO  value=".$row['COD_CLI'].">";
echo" <input type=hidden  id=USU_INCLUI_PEDIDO  value=".$row['USU_INCLUI'].">";
echo" <input type=hidden  id=DT_EMISSAO_PEDIDO  value=".$row['DT_EMISSAO'].">";
echo" <input type=hidden  id=COD_PED_PEDIDO  value=".$row['COD_PED'].">";
echo" <input type=hidden  id=TIPO_TRANSP_PEDIDO  value=".$row['TIPO_TRANSP'].">";

echo" </form>";

echo"
</tr>
";
}



?>

