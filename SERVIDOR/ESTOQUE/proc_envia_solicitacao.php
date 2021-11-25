<?php

include 'conexaoMysql.php';
$cod_prod = $_POST['cod_prod'];
$observacao = $_POST['observacao'];
if($observacao == "")
{
    $observacao = "SOLICITAÇÃO DE COMPRA SEM OBS.";
}
date_default_timezone_set('America/Sao_Paulo');
$data_envio = date('d/m/Y');
$notificacao = 0;
$nome_prod = $_POST['nome_prod'];




$sql = "INSERT INTO cont_compra (COD_PROD, DETALHE_PEDIDO, DATA_PEDIDO,NOTIFICACAO,NOME_PROD,QTD_COMPRA,DATA_COMPRA,DETALHE_COMPRA,ORDEM_COMPRA)
VALUES ('$cod_prod', '$observacao', '$data_envio', '$notificacao', '$nome_prod',0,'','','')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

