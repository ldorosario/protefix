<?php
include 'conexaoMysql.php';
$banco = $_POST['banco'];
$valor = $_POST['valor'];
$operacao = $_POST['operacao']; //operacao
$data = $_POST['dt_emissao'];
$tipo = $_POST['tipo_lanc'];
$observacao = $_POST['observacao'];
$predatado = $_POST['predatado'];
$situacao = $_POST['situacao'];

$sql="INSERT INTO cheque (ncheque,tipo,banco,data,situacao,valor,nome_banco,observacao)
 VALUES ('$operacao','$tipo','$banco','$data','$situacao','$valor','$banco','$observacao')";
$resultado = mysqli_query($conn, $sql);
