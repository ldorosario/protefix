<?php

include 'conexaoMysql.php';

$valor = $_POST['valor'];

echo $valor;

$sql = "SELECT*FROM soma_cheque WHERE id LIKE '1'";

$resultado = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($resultado))
    {
        $valor_soma = $row['valor_soma'];

        $arr = array($valor,$valor_soma);
        $resultado = array_sum($arr);



$sql = "UPDATE soma_cheque SET valor_soma = '$resultado' WHERE id LIKE '1'";

$resultado  = mysqli_query($conn, $sql);
    }






    