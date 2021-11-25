
<div class="fadein" id="">
<div class="">
<table class="table table-hover" id="myTable">
  <thead>
    <tr>
    <th class="text-center">COD</th>
      <th class="text-center">PRODUTO</th>
      <th class="text-center">OBSERVAÇÃO</th>
      <th class="text-center">ENVIAR PARA ESTOQUE</th>
    </tr>
  </thead>
  <tbody>
<?php 

include 'conexaoMysql.php';



  $sql = "SELECT*FROM cont_compra WHERE NOTIFICACAO LIKE 2 AND NOTIFICACAO ORDER BY id DESC";
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
    
      $detalhe ="COMPRA EFETUADA " . $data_compra ."/ QTDE ".$qtd_compra." uni";
      echo" <tr>";
      echo" <td class='text-center'>".$cod_prod."</td>";
      echo"<td class='text-center'>".$nome_prod."</td>";
      echo"<td class='text-center'>".$detalhe."</td>";
      echo"<input type='hidden' id='qtd_compra' value=".$qtd_compra.">";
      echo"<input type='hidden' id='cod_prod' value=".$cod_prod.">";
      echo"<input type='hidden' id='id_compra' value=".$id_compra.">";
      echo"<td class='text-center'><button class='btn btn-primary btn-sm' value=".$cod_prod." onclick='Carrega_produto(this)'><i class='fa fa-search'></i></button></td>";
      echo "</tr>";
    }
  
  }
  

?>
</div>

</div>
</div>

