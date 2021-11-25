
<div class="fadein" id="">
<div class="">
<table class="table table-hover" id="myTable">
  <thead>
    <tr>
    <th class="text-center">COD</th>
      <th class="text-center">PRODUTO</th>
      <th class="text-center"></th>
      <th class="text-center"></th>
    </tr>
  </thead>
  <tbody>
<?php 

include 'conexaoMysql.php';



  $sql = "SELECT*FROM cont_compra WHERE NOTIFICACAO  LIKE 2 ORDER BY id DESC";
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
  
  echo"<td><button class='btn btn-danger btn-sm' value =".$id_compra." onclick='Remove_da_lista_compras_efetuadas(this)'><i class='fa fa-remove'></button></td>";

    }
  
  }
  

?>
</div>

</div>
</div>

