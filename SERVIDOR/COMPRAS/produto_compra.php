
<div class="fadein" id="produto">
<table class="table table-hover">
    <thead>
      <tr>
        <th class="">CODIGO</th>
        <th class="">PRODUTO</th>
        <th class="">CUSTO</th>
        <th class=""></th>
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
    $custo = $row['CUSTO_REP'];
    $porcentagem = 16;
    $valor_sem_impostos = $custo * ($porcentagem / 100);
    $custo_sem_imposto = $custo - $valor_sem_impostos;
    echo"<td class=''>R$ ".$custo_sem_imposto." > $ ".$row['CUSTO_REP']."</td>"; //por custo aqui
    echo"<td class=''><button class='btn btn-success btn-sm' type='button' data-toggle='modal' data-target='#myModalNovaCompra'><i class='fa fa-dollar'></i></i></button>";
    echo "</tr>";
     echo "</tbody>";
     echo"</table>";
 }

?> 
</div>



<?php
//VERIFICA SE O ITEM ESTA NA LISTA DE REMOVER

include 'conexaoMysql.php';

$sql = "SELECT*FROM cont_remover WHERE COD_PROD ='$cod_prod' AND NOTIFICACAO = 0";
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
      </tr>
    </thead>
    <tbody>
   <td> <?php echo $contagem; ?></td>
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


echo"<td><button class='btn btn-success btn-sm x' type='button' data-toggle='modal' data-target='#myModal'><i class='fa fa-dollar'></i></i></button>";

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
<th >DATA COMPRA</th>
<th ></th>
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
  echo" <tr>";
  echo" <td >".$observacao."</td>";
  echo" <td >".$data_envio."</td>";
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
<th ></th>
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
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
       <h4 class="modal-title"><i>SOLICITAÇÃO DE COMPRA</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
  

       <center>Deseja comprar <i><?php echo $NOME_PRODUTO; ?> </i> ?</center>
        <br>
    
       <label for="comment">Detalhes:</label>
      <textarea class="form-control" rows="3" id="detalhe" placeholder="Fornecedor, Data da compra, Data de entrega etc..." autofocus required="required"></textarea>
      <input type="number" id="qtd_compra" class="form-control" placeholder="Quantidade" aria-label="" aria-describedby="basic-addon2" required="required" />
      <br>
      <input type="hidden" id="cod_prod" value="<?php echo $cod_prod; ?>" />
      <input type="hidden" id="id_compra" value="<?php echo $id_pedido_compra; ?>" />
      <input type="hidden" id="nome_prod" value="<?php echo $NOME_PRODUTO; ?>" />
      <br>
      <button type="sumbit" class="btn btn-primary btn-sm btn-block" onclick="Processo_atualiza_compra()"><i class="fa fa-check-circle"></i> OK</button>
        </div> 
    
        </div>
      </div>
    </div>
  </div>
  
</div>



<!-- The Modal -->
<div class="modal fade" id="myModalNovaCompra">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
       <h4 class="modal-title"><i>NOVA COMPRA PRODUTO</i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
       <center>Deseja realizar uma nova compra  <i><?php echo $NOME_PRODUTO; ?> </i> ?</center>
        <br>
        <div class="form-group">
       <label for="comment">Detalhes:</label>
      <textarea class="form-control" rows="3" id="detalhe_nova" placeholder="Fornecedor, Data da compra, Data de entrega etc..." autofocus required></textarea>
      <input type="number" id="qtd_compra_nova" class="form-control" placeholder="Quantidade" aria-label="" aria-describedby="basic-addon2" required/>
      <br>
      <input type="hidden" id="cod_prod_nova" value="<?php echo $cod_prod; ?>" />
      <input type="hidden" id="nome_prod_nova" value="<?php echo $NOME_PRODUTO; ?>" />
      <br>
      <button type="sumbit" class="btn btn-primary btn-sm btn-block"  onclick="Processo_compra()"><i class="fa fa-check-circle"></i> OK</button>
        </div> 
       </form>
        </div>
      </div>
    </div>
  </div>
  
</div>
