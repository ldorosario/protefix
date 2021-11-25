<?php

include 'conexaoMysql.php';

$cod_prod = $_POST['cod_prod'];
$nome_prod = $_POST['nome_prod'];
date_default_timezone_set('America/Sao_Paulo');
$data_envio = date('d/m/Y');
$notificacao = 1;

$sql = "INSERT INTO cont_remover (COD_PROD,NOME_PROD,DATA_ENVIO,NOTIFICACAO) VALUES ('$cod_prod','$nome_prod','$data_envio','$notificacao')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

