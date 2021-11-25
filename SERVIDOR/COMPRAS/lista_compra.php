
<div class="fadein" id="">
<div class="">
<table class="table table-hover" id="myTable">
  <thead>
    <tr>
    <th class="text-center">COD</th>
      <th class="text-center">PRODUTO</th>
      <th class="text-center">DETALHE</th>
      <th class="text-center"></th>
    </tr>
  </thead>
  <tbody>
<?php 

include 'conexaoMysql.php';



  $sql = "SELECT*FROM cont_compra WHERE NOTIFICACAO LIKE 0 ORDER BY id DESC";
  $resultado = mysqli_query($conn, $sql);
  if (mysqli_num_rows($resultado) > 0) {
    
    while($row = mysqli_fetch_assoc($resultado)) {
      $id_compra = $row['id'];
      $cod_prod = $row['COD_PROD'];
      $detalhe = $row['DETALHE_PEDIDO'];
      $notificacao = $row['NOTIFICACAO'];
      $data_envio = $row['DATA_PEDIDO'];
      $nome_prod = $row['NOME_PROD'];
      $data_compra = $row['DATA_COMPRA'];
      $qtd_compra = $row['QTD_COMPRA'];
  
    
      $detalhe ="SOLICITAÇÃO DE COMPRA ENVIADO " . $data_envio;
      $qtd ="AGUARDANDO";
      echo" <tr>";
      echo" <td class='text-center'>".$cod_prod."</td>";
      echo"<td class='text-center'>".$nome_prod."</td>";
      echo"<td class='text-center'>".$detalhe."</td>";
      
  
  echo"<td><button class='btn btn-primary btn-sm' value =".$cod_prod." onclick='Carrega_produto(this)'><i class='fa fa-search-plus'></button></td>";

    }

    
  
  }
  

?>
</div>

</div>
</div>



<!-- The Modal -->
<div class="modal fade" id="myModalVerProduto">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
       <h4 class="modal-title"><i></i></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div id="produto_selecionado"> <!---- via JS -----> </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
