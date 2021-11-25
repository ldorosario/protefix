
<div class="fadein">
<table id="myTable2" class="table table-hover" >
  <thead>
    <tr>
      <th class="text-center">NUMERO</th>
      <th class="text-center">NOME CLIENTE</th>
      <th class="text-center">TRANSPORTE</th>
      <th class="text-center">VENDEDOR</th>
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
echo "<td class='text-center' >".$row['USU_INCLUI']."</td>";

echo "<td class='text-center'><button class='btn btn-success btn-sm' type='submit'  onclick='Proc_envia_pedido()' id=''><b><i class='fa fa-check' ></i> </b></button></td>";

echo" <input type=hidden  id=NOME_CLI_FOR_PEDIDO  value='".$row['NOME_CLI_FOR']."'>";
echo" <input type=hidden  id=EMPRESA_PEDIDO  value=".$EMPRESA.">";
echo" <input type=hidden  id=COD_CLI_PEDIDO  value=".$row['COD_CLI'].">";
echo" <input type=hidden  id=TIPO_TRANSP_PEDIDO  value=".$TIPO_TRANSP.">";
echo" <input type=hidden  id=USU_INCLUI_PEDIDO  value=".$row['USU_INCLUI'].">";
echo" <input type=hidden  id=DT_EMISSAO_PEDIDO  value=".$row['DT_EMISSAO'].">";
echo" <input type=hidden  id=COD_PED_PEDIDO  value=".$row['COD_PED'].">";

echo" </form>";

echo"
</tr>
";
}


// echo"<table class=table table-hover >
//   <thead>
//     <tr>
//     <th class='text-center'>COD</th>
//       <th class='text-center'>PRODUTO</th>
//       <th class='text-center'>OBS</th>
//       <th class='text-center'>QTD</th>
//       <th class='text-center'>LOCAL ALMOX</th>     
//     </tr>
//   </thead>
//   <tbody>";

// $query2 = "SELECT ITEMS_PEDIDO.COD_PED, ITEMS_PEDIDO.COD_PROD,ITEMS_PEDIDO.COD_EMP,
// ITEMS_PEDIDO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_PEDIDO.OBS, PRODUTOS.LOCAL_ALMOX,PRODUTOS.UNIDADE,
// ITEMS_PEDIDO.ITEM
// FROM ITEMS_PEDIDO  
// INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_PEDIDO.COD_PROD)
// WHERE COD_PED = $COD_PED AND ITEMS_PEDIDO.COD_EMP = $EMPRESA ORDER BY LOCAL_ALMOX ASC
// ";

    

//     $data2 = $connect->query($query2);

//     foreach($data2 as $row2)
//     {    

//      $UNIDADE = $row2['UNIDADE'];
//      if($UNIDADE == "PÇ"){$UNIDADE = "PC";}

//       echo "<tr>";
//       echo "<td class='text-center' >".$row2['COD_PROD']."</td>";
//       echo "<td class='text-center' >".$row2['NOME_PROD']."</td>";
//       echo "<td class='text-center' >".$row2['OBS']."</td>";
//       echo "<td class='text-center' >".$row2['QTDE_PED']." ".$UNIDADE."</td>";
//       echo "<td class='text-center' >".$row2['LOCAL_ALMOX']."</td>";
//       echo "</tr>";
    
//     }






?>

