<?php

include 'conexaoMysql.php';

$NOME_CLI_FOR = $_POST['NOME_CLI_FOR'];
$NUM_NOTA = $_POST['NUM_NOTA'];
$INFO_ADC = $_POST['INFO_ADC'];
$DT_ALTERA = $_POST['DT_ALTERA'];
$SITUACAO = $_POST['SITUACAO'];
$DT_EMISSAO = $_POST['DT_EMISSAO'];


$sql = "SELECT*FROM nfe_cancelada WHERE NUM_NOTA = '$NUM_NOTA'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{
    $sql = "UPDATE nfe_cancelada SET INFO_ADC = '$INFO_ADC', DATA_CANCELADA = '$DT_ALTERA', SITUACAO = '$SITUACAO', DATA_EMISSAO = '$DT_EMISSAO' WHERE NUM_NOTA = '$NUM_NOTA'";
    $resultado = mysqli_query($conn,$sql);
}
else
{
    $sql = "INSERT INTO nfe_cancelada (NOME_CLI_FOR,NUM_NOTA,INFO_ADC,DATA_CANCELADA,SITUACAO,DATA_EMISSAO) VALUES ('$NOME_CLI_FOR','$NUM_NOTA','$INFO_ADC','$DT_ALTERA','$SITUACAO','$DT_EMISSAO')";
    $resultado = mysqli_query($conn, $sql);
  
}


