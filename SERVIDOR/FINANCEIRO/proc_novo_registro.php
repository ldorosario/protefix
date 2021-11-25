<?php
include 'conexaoMysql.php';
$banco = $_POST['banco'];
$valor = $_POST['valor'];
$operacao = $_POST['operacao']; //operacao
$data = $_POST['dt_emissao'];
$tipo = $_POST['tipo_lanc'];
$observacao = $_POST['observacao'];
$ncheque = $_POST['ncheque'];
$predatado = $_POST['predatado'];
$situacao = $_POST['situacao'];

$sql="INSERT INTO cheque (ncheque,tipo,banco,data,predatado,situacao,valor,nome_banco,observacao)
 VALUES ('$ncheque','$tipo','$banco','$data','$predatado','$situacao','$valor','$banco','$observacao')";
$resultado = mysqli_query($conn, $sql);
