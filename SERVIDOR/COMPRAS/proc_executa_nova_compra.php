<?php


include 'conexaoMysql.php';

$detalhe = $_POST['detalhe_nova'];
$qtd_compra = $_POST['qtd_compra_nova'];
$cod_prod = $_POST['cod_prod_nova'];
$notificacao = 2;
date_default_timezone_set('America/Sao_Paulo');
$data_compra = date('d/m/Y');
$nome_prod = $_POST['nome_prod_nova'];
$datalhe_pedido = "COMPRAS EFETUOU A COMPRA";
$data_pedido = $data_compra;
$ordem_compra = "0";
$sql = "INSERT INTO cont_compra (DETALHE_COMPRA,QTD_COMPRA,NOTIFICACAO,DATA_COMPRA,COD_PROD,NOME_PROD,DETALHE_PEDIDO,DATA_PEDIDO,ORDEM_COMPRA) 
VALUES ('$detalhe','$qtd_compra','$notificacao','$data_compra','$cod_prod','$nome_prod','$detalhe_pedido','$data_pedido',$ordem_compra)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
