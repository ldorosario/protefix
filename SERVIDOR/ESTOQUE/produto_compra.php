
<div class="fadein" id="produto">
<table class="table table-hover">
    <thead>
      <tr>
        <th class="">CODIGO</th>
        <th class="">PRODUTO</th>
        <th class="">SILICITAR REMOÇÃO</th>
        <th class="">SILICITAR COMPRA</th>
      </tr>
    </thead>
    <tbody>
<?php 
 include 'conexaoFirebird.php';

$cod_prod = $_POST['cod_prod'];

$query = "SELECT*FROM produtos WHERE COD_PROD LIKE '$cod_prod'";

$data = $connect->query($query); 

foreach($data as $row){

    $NOME_PRODUTO = $row['NOME_PROD']; 
    //ver preço de custo
 echo"<td class=''>".$row['COD_PROD']."</td>";
    echo"<td class=''>".$row['NOME_PROD']."</td>";
    echo"<td class=''><button class='btn btn-danger btn-sm' type='button' data-toggle='modal' onclick='Carrega_envia_remover()'><i class='fa fa-plus'></i></i></button>";
    echo"<td class=''><button class='btn btn-warning btn-sm' type='button' data-toggle='modal' data-target='#myModalSolicitacaoCompra'><i class='fa fa-dollar'></i></i></button>";
    echo "</tr>";
     echo "</tbody>";
     echo"</table>";
     echo"<input type='hidden' id=cod_prod value=".$row['COD_PROD']." />";
     echo"<input type='hidden' id=nome_prod value='".$row['NOME_PROD']."' />";
    
 }

?> 
</div>



<?php
//VERIFICA SE O ITEM ESTA NA LISTA DE REMOVER

include 'conexaoMysql.php';

$sql = "SELECT*FROM cont_remover WHERE COD_PROD ='$cod_prod' AND NOTIFICACAO = 1";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado)>0)
{
  $aviso =  "AGUARDANDO REMOVER";
  echo"<p><font style=color:red>
  <i class='fas fa-exclamation-triangle'></i> ".$aviso."</font></p>";
}



?>







<?php
include 'conexaoMysql.php';

$sql = "SELECT*FROM cont_estoque WHERE COD_PROD = '$cod_prod'";
$resultado = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultado) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($resultado)) {
  $contagem = $row['CONTAGEM'];
 
  }
}
?>
<table class="table table-hover fadein">
    <thead>
      <tr>
        <th>EM ESTOQUE</th>
        <th>ATUALIZAR ESTOQUE</th>
      </tr>
    </thead>
    <tbody>
   <td> <?php echo $contagem; ?></td>
   <td><button class="btn btn-sm btn-primary" type='button' data-toggle='modal' data-target='#myModalContagem'><i class="fa fa-refresh"></i></button></td>
   </table>

   <?php
include 'conexaoMysql.php';

$sql = "SELECT*FROM cont_estoque WHERE COD_PROD = '$cod_prod'";
$resultado = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultado) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($resultado)) {
  $obsrevacaoEstoque = $row['OBSERVACAO'];
 
  }
}
?>
<table class="table table-hover fadein">
    <thead>
      <tr>
        <th>OBSERVACAO</th>
      </tr>
    </thead>
    <tbody>
   <td> <?php echo $obsrevacaoEstoque; ?></td>
   </table>








 <table class="table table-hover fadein">
<thead>
 <tr>
 <th >PEDIDO MERCADORIA</th>
<th >DATA ENVIO</th>
<th ></th>
</tr>
  </thead>
  <tbody>
   <?php
//MOSTRANDO COMPRAS PENDENTES E A CHEGADA DA MERCADORIA
include 'conexaoMysql.php';
$sql = "SELECT*FROM cont_compra WHERE COD_PROD = '$cod_prod' AND NOTIFICACAO LIKE 0"; //notificacao = 0 pedido de compra efetuado
$resultado = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultado) > 0) {
  
  while($row = mysqli_fetch_assoc($resultado)) {
    $id_pedido_compra = $row['id'];
    $observacao = $row['DETALHE_PEDIDO'];
  $notificacao = $row['NOTIFICACAO'];
  $data_envio = $row['DATA_PEDIDO'];
echo" <tr>";
echo" <td >".$observacao."</td>";
echo" <td >".$data_envio."</td>";

echo"</tr>";


}
}
else
{
  echo" <tr>";
echo" <td >NENHUM PEDIDO</td>";
echo" <td >0</td>";
echo"</tr>";

}
//FIM COMPRA E CHEGADA
?>

</tbody>
</table>


<?php
//MOSTRANDO COMPRAS PENDENTES E A CHEGADA DA MERCADORIA


echo"<table class='table table-hover fadein'>
<thead>
 <tr>
 <th >COMPRA MERCADORIA</th>
<th >QUANTIDADE</th>
<th></th>
</tr>
  </thead>
  <tbody>";



  include 'conexaoMysql.php';
  $sql = "SELECT*FROM cont_compra WHERE COD_PROD = '$cod_prod' AND NOTIFICACAO LIKE 2"; //notificacao = 2, compra efetuada
  $resultado = mysqli_query($conn, $sql);
  if (mysqli_num_rows($resultado) > 0) {
    
    while($row = mysqli_fetch_assoc($resultado)) {
    $id_compra = $row['id'];
    $observacao = $row['DETALHE_COMPRA'];
    $notificacao = $row['NOTIFICACAO'];
    $data_envio = $row['DATA_COMPRA'];
    $qtd_compra = $row['QTD_COMPRA'];
    $cod_prod_comra = $row['COD_PROD'];

  echo" <tr>";
  echo" <td >".$observacao."</td>";
  echo" <td >".$qtd_compra."</td>";
  echo"<td class='text-center'><button class='btn btn-primary btn-sm' value=".$cod_prod." onclick='Proc_envia_mercadoria_estoque()'><i class='fa fa-send'></i></button></td>";
  echo"<input type='hidden' value =".$cod_prod." id='cod_prod_compra'>";
  echo"<input type='hidden' value =".$qtd_compra." id='qtd_compra'>";
  echo"<input type='hidden' value =".$id_compra." id='id_compra'>";
echo"</tr>";


}

}
else
{
  
echo" <tr>";
echo" <td >NENHUMA COMPRA</td>";
echo"<td >0</td>";
echo"<td ></td>";
echo"</tr>";
}


echo"</tbody>
</table>";


//FIM COMPRA E CHEGADA
?>


<?php
//MOSTRANDO COMPRAS PENDENTES E A CHEGADA DA MERCADORIA


echo"<table class='table table-hover fadein'>
<thead>
 <tr>
 <th>HISTORICO DE COMPRAS</th>
<th></th>

</tr>
  </thead>
  <tbody>";



  include 'conexaoMysql.php';
  
  $sql = "SELECT*FROM cont_compra WHERE COD_PROD = '$cod_prod' AND QTD_COMPRA NOT LIKE 0 ORDER BY id DESC"; //notificacao = 2, compra efetuada
  $resultado = mysqli_query($conn, $sql);
  if (mysqli_num_rows($resultado) > 0) {
    
    while($row = mysqli_fetch_assoc($resultado)) {
      $id_compra = $row['id'];
      $observacao = $row['DETALHE_COMPRA'];
    $notificacao = $row['NOTIFICACAO'];
    $data_envio = $row['DATA_COMPRA'];
    $qtd_compra = $row['QTD_COMPRA'];
  echo" <tr>";
  echo" <td >".$observacao."</td>";
  echo" <td >".$qtd_compra." </td>";
echo"</tr>";


}

}
else
{
  
echo" <tr>";
echo" <td >NENHUMA COMPRA REGISTRADA</td>";
echo"<td ></td>";
echo"</tr>";
}


echo"</tbody>
</table>";


//FIM COMPRA E CHEGADA
?>







</div>
</div>
  </div>



<!-- The Modal -->
<div class="modal fade" id="myModalSolicitacaoCompra">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
       <h4 class="modal-title"><i>SOLICITAÇÃO DE COMPRA</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
       <center>Deseja realizar uma solicitação de compra  <i><?php echo $NOME_PRODUTO; ?> </i> ?</center>
        <br>
        <div class="form-group">
       <label for="comment">Detalhes:</label>
      <textarea class="form-control" rows="3" id="observacao" placeholder="Pedido pendente etc..." autofocus required></textarea>
      <br>
      <input type="hidden" id="cod_prod" value="<?php echo $cod_prod; ?>" />
      <input type="hidden" id="nome_prod" value="<?php echo $NOME_PRODUTO; ?>" />
      <br>
      <button type="sumbit" class="btn btn-primary btn-sm btn-block"  onclick="Processo_envia_solicitacao()"><i class="fa fa-check-circle"></i> OK</button>
        </div> 
       </form>
        </div>
      </div>
    </div>
  </div>
  
</div>


<!-- The Modal -->
<div class="modal fade" id="myModalContagem">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><i>Atualizar contagem de estoque</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
    
        
      <div class="input-group mb-3">
  <input type="text" id="nova_contagem" class="form-control" placeholder="NOVA CONTAGEM DE ESTOQUE" aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus >
 <input type="hidden" id="cod_prod_atualiza" value ="<?php echo $cod_prod; ?>" />
  <div class="input-group-append">
    <button class="btn btn-outline-success" onclick="Proc_atualiza_contagem()"><b><i class="fa fa-refresh" style="font-size:20px"></i> </b></button>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>
  
</div>


