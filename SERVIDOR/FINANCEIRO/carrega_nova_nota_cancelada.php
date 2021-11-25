
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


 $NUM_NOTA = $_POST['NUM_NOTA'];
 $EMPRESA = $_POST['EMPRESA'];
 
  include 'conexaoFirebird.php';
 
  if($EMPRESA == "FICOFIX")
  {$EMPRESA = "3";}else{$EMPRESA = "1";}
  $query = "SELECT FIRST 1 DOCS_SAIDA.COD_EMP ,DOCS_SAIDA.SITUACAO,DOCS_SAIDA.DT_EMISSAO,DOCS_SAIDA.DT_ALTERA,DOCS_SAIDA.SITUACAO, DOCS_SAIDA.NUM_NOTA, DOCS_SAIDA.CHAVE_ACESSO, DOCS_SAIDA.COD_CLI, DOCS_SAIDA.NUM_PEDIDO, CLI_FOR.COD_CLI_FOR, CLI_FOR.NOME_CLI_FOR
  FROM DOCS_SAIDA INNER JOIN CLI_FOR ON (CLI_FOR.COD_CLI_FOR = DOCS_SAIDA.COD_CLI) WHERE  $NUM_NOTA = DOCS_SAIDA.NUM_NOTA AND DOCS_SAIDA.COD_EMP = $EMPRESA"; //NAO ESQUECER DE UTILIZAR O POST EMPRESA QUANDO OK.
  
 $data = $connect->query($query);
 
 foreach($data as $row){
 
 
  echo "<tr>";

   echo "<td>".$row['NOME_CLI_FOR']."</td>"; 
   echo "<td>".$row['NUM_NOTA']."</td>"; 
   
   //conversao de data 
 $data_original2 = $row['DT_EMISSAO'];
 
 $timestamp2 = strtotime($data_original2);
 
 $nova_data2 = date("d-m-Y", $timestamp2);
 //fim da conversao 
 echo "<td>".$nova_data2."</td>"; 

 //conversao de data 
 $data_original = $row['DT_ALTERA'];
 
 $timestamp = strtotime($data_original);
 
 $nova_data = date("d-m-Y", $timestamp);
 //fim da conversao 
 if($row['DT_ALTERA'] =="")
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
 echo"<textarea class='form-control'  id=INFO_ADC rows=4 cols=150></textarea>";
 echo"<hr>";
 echo"<button type='submit' class='btn-block btn-sm btn-primary' onclick='Proc_registra_nfecancelada()'>CONFIRMAR</button>";
 echo" <input type=hidden  id=NOME_CLI_FOR  value='".$row['NOME_CLI_FOR']."'>";
 echo" <input type=hidden  id=NUM_NOTA  value='".$row['NUM_NOTA']."'>";
 echo" <input type=hidden  id=DT_ALTERA value='".$row['DT_ALTERA']."'>";
 echo" <input type=hidden  id=DT_EMISSAO value='".$row['DT_EMISSAO']."'>";
 echo" <input type=hidden  id=SITUACAO  value='".$row['SITUACAO']."'>";
 
 
 }
 
 
 
 ?>
 
</div>
</div>
</div>

</div>