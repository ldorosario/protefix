<?php

include 'conexaoMysql.php';

$id_compra = $_POST['id_compra'];
$cod_prod = $_POST['cod_prod'];
$qtd_compra = $_POST['qtd_compra'];

$sql = "SELECT*FROM cont_estoque WHERE COD_PROD = '$cod_prod'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{ 
    while($row = mysqli_fetch_assoc($resultado))
    {
      
        $contagem = $row['CONTAGEM'];
 
    $contagem_atualizada = $contagem + $qtd_compra;
    $sql = "UPDATE cont_estoque SET CONTAGEM = '$contagem_atualizada' WHERE cod_prod = '$cod_prod'";
    $resultado = mysqli_query($conn, $sql);

    echo "Contagem atualizada.";

    $sql = "UPDATE cont_compra SET NOTIFICACAO = 3 WHERE id = '$id_compra'";
$resultado = mysqli_query($conn, $sql);

    }
    
  
}
else
{
$sql ="INSERT INTO cont_estoque (CONTAGEM,COD_PROD,OBSERVACAO) VALUES ('$qtd_compra','$cod_prod','')";
$resultado = mysqli_query($conn,$sql);

echo "Novo produto inserido.";
echo $qtd_compra;
echo "<br>";
echo $cod_prod;

$sql = "UPDATE cont_compra SET NOTIFICACAO = 3 WHERE id = '$id_compra'";
$resultado = mysqli_query($conn, $sql);

}



