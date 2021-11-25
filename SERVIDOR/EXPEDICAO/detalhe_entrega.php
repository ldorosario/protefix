<div class="fadein">  
<table id="myTable" class="table table-hover" >
<?php

    echo"<thead>";
    echo" <tr>";
    
    echo" <th class=>TIPO</th>";
    echo" <th class=>PEDIDO</th>";
    echo" <th class=>NOME CLIENTE</th>";
    echo" <th class=>MOTORISTA</th>";
    echo" <th class=>DATA SAIDA</th>";
    echo" <th class=></th>";
   
    echo" </tr>";
    echo" </thead>";
    echo" <tbody>";

include 'conexaoMysql.php';

$NUM_PEDIDO = $_POST['NUM_PEDIDO']; // 

$sql = "SELECT*FROM logistica_entrega WHERE NUM_PEDIDO = '$NUM_PEDIDO'";
 
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0){ //QUANDO A QUANTIDADE DE TUPLAS FOR == 1 MODELA O CSS DA TABELA PARA 100%
 
while($row = mysqli_fetch_assoc($result)){
  
  echo"<tr>";
  $MOTORISTA = strtoupper($row['MOTORISTA']); // NOME DO MOTORISTA EM UPPERCASE
    $id = $row['id'];
    echo"<td>".$row['TIPO']."</a></td>";
    echo"<td>".$row['NUM_PEDIDO']."</a></td>";
    echo"<td>".$row['NOME_CLI_FOR']."</a></td>";
    echo"<td>".$MOTORISTA."</a></td>";
    echo"<td>".$row['DATA']."</a></td>";
    echo"<td class='text-center'><a href='proc_remover_entrega.php?id=$id'><button class='btn btn-sm btn-danger'><i class='fa fa-remove'></i></button></a></td>";
    
    $NOME_CLI_FOR = $row['NOME_CLI_FOR'];
 
  
   
}
}
?>


<table id="myTable" class="table table-hover" >
<?php

    echo"<thead>";
    echo" <tr>";
    
    echo" <th class=>ASSINATURA DO CANHOTO</th>";

 
    echo" </tr>";
    echo" </thead>";
    echo" <tbody>";

include 'conexaoMysql.php';

$NUM_PEDIDO = $_POST['NUM_PEDIDO']; 

$sql = "SELECT*FROM logistica_entrega WHERE NUM_PEDIDO = '$NUM_PEDIDO'";
 
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0){ //QUANDO A QUANTIDADE DE TUPLAS FOR == 1 MODELA O CSS DA TABELA PARA 100%
 
while($row = mysqli_fetch_assoc($result)){
  
  echo"<tr>";
  $MOTORISTA = strtoupper($row['MOTORISTA']); // NOME DO MOTORISTA EM UPPERCASE
    if($row['ASS_CANHOTO'] ==  "")
    {
      echo"<td>AGUARDANDO ASSINATURA</a></td>";
    }
    else
    {
    echo"<td>".$row['ASS_CANHOTO']."</a></td>";
    }
  
   
}
}
?>


<div class="container">
<h6><b>NOVA ENTREGA E MOTORISTA</b></h6>
<form action="proc_reenviar_entrega.php" method="POST">
  <select name="RE_ENTREGA" class="custom-select select-entrega" required>
    <option selected></option>
    <option value="1">COMO ACERTO</option>
    <option value="2">COMO TROCA</option>
  </select>
  <select name="NOVO_MOTORISTA" class="custom-select select-entrega" required>
    <option selected></option>
    <?php
     include 'conexaoMysql.php';
     $sqlmotorista = "SELECT nome FROM motoristas";
     $resultadomotorista = mysqli_query($conn, $sqlmotorista);
     while($row = mysqli_fetch_assoc($resultadomotorista))
     {
      echo"<option>".$row['nome']."</option>";
     }
    ?>
    
  </select>
  <button class="btn  btn-success"> <b>ENVIAR NOVAMENTE</b> </button>
  <input type="hidden" name="NUM_PEDIDO" value="<?php echo $NUM_PEDIDO; ?>" />
</form>
</div>

<br>


<div class="produto" id="produto">
<table class="table table-hover" id="MyTable">
  <thead>
    <tr>
    <th class="">PRODUTO</th>
      <th class="">QUANTIDADE</th>
      <th class="">OBS</th>
    </tr>
  </thead>
  <tbody>

<?php
$NUM_PEDIDO = $_POST['NUM_PEDIDO'];
$tamanho = strlen($NUM_PEDIDO); //VERIFICA TAMANHO DO PEDIDO, SE MAIOR QUE 6 =PROTEFIX 5=FICOFIX 7=ORÇAMENTO PROTEFIX 4=VALE PROTEFIX


include 'conexaoFirebird.php';




if($tamanho == 4)  //VALE
{

  $query = "SELECT ITEMS_VALE.COD_VALE, ITEMS_VALE.COD_PROD,ITEMS_VALE.COD_EMP,
  ITEMS_VALE.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_VALE.OBS
  FROM ITEMS_VALE  
  INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_VALE.COD_PROD)
  WHERE COD_VALE = $NUM_PEDIDO
  ";
  
  
  
  $data = $connect->query($query);
  foreach($data as $row){
    echo"<tr>";
     
  
        echo"<td class='' >".$row['NOME_PROD']."</td>";
        echo"<td class='' >".$row['QTDE_PED']."</td>";
        echo"<td class='' >".$row['OBS']."</td>";
  
        echo "</tr>";
        echo "</tbody>";
  
  }



}
if($tamanho == 5)// PEDIDO FICOFIX
{

  $query = "SELECT ITEMS_PEDIDO.COD_PED, ITEMS_PEDIDO.COD_PROD,
  ITEMS_PEDIDO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_PEDIDO.OBS
  FROM  PRODUTOS
  INNER JOIN ITEMS_PEDIDO  ON  (ITEMS_PEDIDO.COD_PROD = PRODUTOS.COD_PROD)
  WHERE COD_PED = '$NUM_PEDIDO' 
  ";
  
  
  $data = $connect->query($query);
  foreach($data as $row){
    echo"<tr>";
     
  
        echo"<td class='' >".$row['NOME_PROD']."</td>";
        echo"<td class='' >".$row['QTDE_PED']."</td>";
        echo"<td class='' >".$row['OBS']."</td>";
  
        echo "</tr>";
        echo "</tbody>";
  
  }


}

if($tamanho == 6 ) //PROTEFIX
{
  $query = "SELECT ITEMS_PEDIDO.COD_PED, ITEMS_PEDIDO.COD_PROD,
  ITEMS_PEDIDO.QTDE_PED, PRODUTOS.NOME_PROD,ITEMS_PEDIDO.OBS
  FROM   PRODUTOS
  INNER JOIN ITEMS_PEDIDO  ON  (ITEMS_PEDIDO.COD_PROD = PRODUTOS.COD_PROD)
  WHERE COD_PED = '$NUM_PEDIDO' 
  ";
  
  
  $data = $connect->query($query);
  foreach($data as $row){
    echo"<tr>";
     
  
        echo"<td class='' >".$row['NOME_PROD']."</td>";
        echo"<td class='' >".$row['QTDE_PED']."</td>";
        echo"<td class='' >".$row['OBS']."</td>";
  
        echo "</tr>";
        echo "</tbody>";
  
  }
  }

if($tamanho == 7) //ORCAMENTO PROTEFIX
{

  $query = "SELECT ITEMS_ORCAMENTO.COD_ORC, ITEMS_ORCAMENTO.COD_PROD,
ITEMS_ORCAMENTO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_ORCAMENTO.OBS
FROM ITEMS_ORCAMENTO  
INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_ORCAMENTO.COD_PROD)
WHERE COD_ORC = $NUM_PEDIDO 
";


$data = $connect->query($query);
foreach($data as $row){
  echo"<tr>";
   

      echo"<td class='' >".$row['NOME_PROD']."</td>";
      echo"<td class='' >".$row['QTDE_PED']."</td>";
      echo"<td class='' >".$row['OBS']."</td>";

      echo "</tr>";
      echo "</tbody>";

}
}
?>

	<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
      <th class="">OBS DO PEDIDO</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

<?php

include 'conexaoMysql.php';
include 'conexaoFirebird.php';


if($tamanho == 4)  //VALE
{
$query = "SELECT OBS
 
  FROM VALES WHERE COD_VALE = $NUM_PEDIDO";


$data = $connect->query($query);


foreach($data as $row)
{
  echo"<tr>";
  echo"<td>".$row['OBS']."</a></td><br>";
  echo"</tr>";
}
}

if($tamanho == 5)  //PEDIDO FICOFIX
{
$query = "SELECT OBS
 
  FROM PEDIDOS WHERE COD_PED = $NUM_PEDIDO AND COD_EMP = '3'";


$data = $connect->query($query);


foreach($data as $row)
{
  echo"<tr>";
  echo"<td>".$row['OBS']."</a></td><br>";
  echo"</tr>";
}
}


if($tamanho == 6)  //PEDIDO PROTEFIX
{
$query = "SELECT OBS
 
  FROM PEDIDOS WHERE COD_PED = $NUM_PEDIDO";


$data = $connect->query($query);


foreach($data as $row)
{
  echo"<tr>";
  echo"<td>".$row['OBS']."</a></td><br>";
  echo"</tr>";
}
}

if($tamanho == 7)  //VALE
{
$query = "SELECT OBS
 
  FROM ORCAMENTO WHERE COD_ORC = $NUM_PEDIDO";


$data = $connect->query($query);


foreach($data as $row)
{
  echo"<tr>";
  echo"<td>".$row['OBS']."</a></td><br>";
  echo"</tr>";
}
}

?>
</tbody>
</table>


</div>

