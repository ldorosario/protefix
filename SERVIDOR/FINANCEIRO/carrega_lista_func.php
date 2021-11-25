
<div class="fadein">
<button class="btn btn-sm btn-primary" type="button" onclick="Carrega_novo_func()"><b>NOVO FUNCIONÁRIO(A) +</b></button>
<br>
<br>
<table class="table table-hover" id="myTable">
  <thead>
    <tr>
  
      <th class="">FUNCIONÁRIO</th>
      <th  class="">EMPRESA</th>
      <th  class=""></th>
      <th  class=""></th>
    </tr>
  </thead>
  <tbody>
<?php 

include 'conexaoMysql.php';

$sql = "SELECT*FROM rh_registro_empregado";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado)> 0)
{
  while($row = mysqli_fetch_assoc($resultado))
  {
    echo"<tr>";
    echo"<td>".$row['nome']."</td>";
    echo"<td>".$row['empresa']."</td>";
    echo"<input type='hidden' name='id_funcionario' value=".$row['id']." />";
    echo"<td class='direita'><button  class='btn btn-sm btn-danger ' value=".$row['id']." onclick='Proc_remover_func(this)'><i class='fa fa-remove' style='font-size:20px'></i> </button>";
    echo"<td class='direita'><button  class='btn btn-sm btn-primary ' value=".$row['id']." onclick='Carrega_funcionario(this)'><i class='fa fa-search' style='font-size:20px'></i> </button>";
   
    echo"</tr>";
  }
}

?>
</div>

</div>
</div>