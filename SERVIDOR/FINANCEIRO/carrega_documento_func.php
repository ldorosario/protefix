<div class="container">

<table class="table table-hover" id="myTable">
  <thead>
    <tr>
      <th class=>Documentos</th>
      <th></th>
      <th></th>
    </tr>
  </thead>

<?php 

include 'conexaoMysql.php';

$id_funcionario = $_POST['id_funcionario'];

$sql = "SELECT*FROM rh_arquivo WHERE id_funcionario = '$id_funcionario'";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado)> 0)
{
  while($row = mysqli_fetch_assoc($resultado))
  {
    $id_documento = $row['id'];
    echo"<tr>";
    echo"<td>".$row['descricao']."</td>";
    echo"<td ><button class='btn btn-danger btn-sm' value='".$id_documento."' onclick='Proc_remove_documento_func(this)'><i class='fa fa-remove no-print ' style='font-size:20px'></i></button></td>";
    echo"<td ><a target='_blank' href='".$row['caminho_arquivo']."'><button class=' btn btn-primary btn-sm'><i class='fa fa-search' style='font-size:20px'></i></button></a></td>";
    echo"</tr>";
  }
}

?>

</div>

</div>