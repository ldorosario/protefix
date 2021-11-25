
<div class="fadein" id="produto">
<div class="">
<table class="table table-hover" id="myTable">
  <thead>
    <tr>
    <th class="text-center">COD</th>
      <th class="text-center">PRODUTO</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php 

include 'conexaoFirebird.php';

$query = "SELECT COD_PROD, NOME_PROD FROM produtos ORDER BY NOME_PROD ASC";

$data = $connect->query($query); 

foreach($data as $row)
   {
      echo"<tr>";
      echo"<td class='text-center' >".$row['COD_PROD']."</td>";
      echo"<td class='text-center' >".$row['NOME_PROD']."</td>";
      echo"<td><button class='btn btn-primary btn-sm' value=".$row['COD_PROD']." onclick='Carrega_produto(this)'><i class='fa fa-search-plus' style='font-size:20px'></button></td>";
      echo"</form>";
      echo "</tr>";
      echo "</tbody>";
    }
  
?>
</div>

</div>
</div>

</div>