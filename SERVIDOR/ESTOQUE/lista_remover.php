
<div class="fadein" id="">
<div class="">
<table class="table table-hover" id="MyTable">
  <thead>
    <tr>
    <th class="text-center">COD</th>
      <th class="text-center">PRODUTO</th>
      <th class="text-center">DATA</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php 

include 'conexaoMysql.php';



  $sql = "SELECT*FROM cont_remover WHERE NOTIFICACAO LIKE 1 ORDER BY id DESC";
  $resultado = mysqli_query($conn, $sql);
  if (mysqli_num_rows($resultado) > 0) {
    
    while($row = mysqli_fetch_assoc($resultado)) {
      $cod_prod = $row['COD_PROD'];
    $notificacao = $row['NOTIFICACAO'];
    $data_envio = $row['DATA_ENVIO'];
    $nome_prod = $row['NOME_PROD'];
    $id = $row['id'];

  echo" <tr>";
  
  echo" <td class='text-center'>".$cod_prod."</td>";
  echo"<td class='text-center'>".$nome_prod."</td>";
  echo"<td class='text-center'>".$data_envio."</td>";
  echo"</tr>";
  
  
  }
  }
  
?>
</div>

</div>
</div>

</div>