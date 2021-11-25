<div class="fadein">
<table id="myTable" class="table table-hover" >
  <thead>
    <tr>
    <th class=" ">NUMERO</th>
      <th class=" ">NOME CLIENTE</th>
      <th class=" ">TIPO</th>
      <th class=" ">STATUS</th>
      <th class=" ">USUÁRIO</th>
      <!-- <th class=" "> SEPARADOR</th>
      <th class=" ">IMPRIMIR</th>
      <th class=" ">CONCLUIR</th> -->
      </tr>
  </thead>
  <tbody>


  <!-- PHP ABAIXO -->
  <?php
include 'conexaoMysql.php';  

date_default_timezone_set('America/Sao_Paulo');

$data = date('Y-m-d');

$sql = "SELECT * FROM logistica_separacao_fragmentada WHERE SITUACAO NOT LIKE 'CONCLUIDO' AND LIBERADO LIKE 'SIM' ORDER BY POSICAO DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
 



if($row['SITUACAO'] == "ENVIADO AUTO.")
{
  echo "<audio autoplay><source src=notificacao.wav type=audio/wav
      autoplay></audio>"; 
}

  if($row['TIPO_TRANSP'] ==  "6"){
    echo "<tr class='bg-danger'>";
  }
  elseif($row['DT_EMISSAO'] <> $data)
{
  echo "<tr class='bg-warning '>";
}
  elseif($row['SINCRONIA'] == 1)
  {
    echo "<tr class='bg-info'>";
  }
  elseif($row['SINCRONIA'] == 1 && $row['TIPO_TRANSP'] == "6")
  {
    echo "<tr class='bg-warning'>";
  }
  else
  {
    echo "<tr>";
  }

  echo"<td>".$row['COD_PED']."</td>";

  if($row['NOME_CLI_FOR'] == "")
  {
    echo"<td class='' >CLIENTE S/ CADASTRO</a></td>";
  }else
  {
    echo"<td class='' >".$row['NOME_CLI_FOR']."</a></td>";
  }
 
  if($row['TIPO_TRANSP'] ==  "1")
  {
    $TIPO_TRANSP = "RETIRA";
    echo"<td>".$TIPO_TRANSP."</td>";
  }
  elseif($row['TIPO_TRANSP'] == "2")
  {
    $TIPO_TRANSP = "PROTEFIX";
    echo"<td>".$TIPO_TRANSP."</td>";
  }
  elseif($row['TIPO_TRANSP'] == "3")
  {
    $TIPO_TRANSP = "MOTOBOY";
    echo"<td>".$TIPO_TRANSP."</td>";
  }
  elseif($row['TIPO_TRANSP'] == "4")
  {
    $TIPO_TRANSP = "TRANSPORTADORA";
    echo"<td>".$TIPO_TRANSP."</td>";
  }
  elseif($row['TIPO_TRANSP'] == "5")
  {
    $TIPO_TRANSP = "FICOFIX";
    echo"<td>".$TIPO_TRANSP."</td>";
  }
  elseif($row['TIPO_TRANSP'] == "6")
  {
    $TIPO_TRANSP = "PREFERENCIAL";
    echo"<font style=color:red><td>".$TIPO_TRANSP."</td></font>";
  }
  else
  {
    $TIPO_TRANSP = "PROTEFIX/FICOFIX";
    echo"<td>".$TIPO_TRANSP."</td>";
  }

  
  $COD_PED = $row['COD_PED'];
  $NOME_CLI_FOR = $row['NOME_CLI_FOR'];
  $TIPO_TRANSP = $row['TIPO_TRANSP'];
  $SITUACAO = $row['SITUACAO'];
  $USU_INCLUI = $row['USU_INCLUI'];
  if($row['SITUACAO'] == "IMPRIMIR") //VERIFICA SE O PEDIDO FOI IMPRESSO.
  {
   echo "<script>window.open('proc_emseparacao.php?COD_PED=$COD_PED&NOME_CLI_FOR=$NOME_CLI_FOR&TIPO_TRANSP=$TIPO_TRANSP&SITUACAO=$SITUACAO&USU_INCLUI=$USU_INCLUI')</script>";
  }

  echo"<td>".$row['SITUACAO']."</td>";
  echo"<td>".$row['USU_INCLUI']."</td>";
}
}
?>