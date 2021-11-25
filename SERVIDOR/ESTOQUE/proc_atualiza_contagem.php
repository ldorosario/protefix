

<?php
include 'conexaoMysql.php';


$nova_contagem =$_POST['nova_contagem'];
$cod_prod = $_POST['cod_prod'];

$sql = "SELECT*FROM cont_estoque WHERE COD_PROD = '$cod_prod'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{
$sql = "UPDATE cont_estoque SET CONTAGEM = '$nova_contagem' WHERE COD_PROD = '$cod_prod'";
$resultado = mysqli_query($conn, $sql);
}
else
{
$sql ="INSERT INTO cont_estoque (CONTAGEM,COD_PROD,OBSERVACAO) VALUES ('$nova_contagem','$cod_prod','')";
$resultado = mysqli_query($conn,$sql);
}
