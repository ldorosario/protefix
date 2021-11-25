<?php


include 'conexaoMysql.php';
$id_compra = $_POST['id_compra'];
$detalhe = $_POST['detalhe'];
$qtd_compra = $_POST['qtd_compra'];
$cod_prod = $_POST['cod_prod'];
$notificacao = 2;
date_default_timezone_set('America/Sao_Paulo');
$data_compra = date('d/m/Y');

$sql =  "UPDATE cont_compra SET DETALHE_COMPRA = '$detalhe', QTD_COMPRA = '$qtd_compra', NOTIFICACAO = '$notificacao', DATA_COMPRA ='$data_compra', COD_PROD ='$cod_prod' WHERE id ='$id_compra'";
$resultado = mysqli_query($conn, $sql);
