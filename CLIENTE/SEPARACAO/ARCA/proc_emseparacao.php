<?php

include 'conexaoMysql.php';

$COD_PED = $_GET['COD_PED'];
$TIPO_SEPARACAO = $_GET['TIPO_SEPARACAO'];
$COD_EMP = $_GET['COD_EMP'];
$SEPARADOR_SELECIONADO = $_GET['SEPARADOR'];



$sqlrst = "SELECT separador FROM logistica_separacao_fragmentada_arca WHERE COD_PED LIKE '$COD_PED'";
$rst = mysqli_query($conn, $sqlrst);
if(mysqli_num_rows($rst) > 0){
while($row = mysqli_fetch_assoc($rst))
{
    $SEPARADOR = $row['separador'];
}
}else
{
    $SEPARADOR = $_GET['SEPARADOR'];  
}
$sql = "UPDATE logistica_separacao_fragmentada_arca SET SITUACAO = 'IMPRESSO/SEPARACAO $SEPARADOR_SELECIONADO' WHERE COD_PED = '$COD_PED'";
$resultado = mysqli_query($conn,$sql);

$sql = "UPDATE logistica_separacao_fragmentada_arca SET SEPARADOR = '$SEPARADOR_SELECIONADO'  WHERE COD_PED = '$COD_PED'";
$resultado = mysqli_query($conn, $sql);


$sql = "UPDATE logistica_separacao_fragmentada_painel SET SITUACAO_ARCA = 'IMPRESSO/SEPARACAO $SEPARADOR_SELECIONADO' WHERE COD_PED ='$COD_PED'";
$resultado = mysqli_query($conn, $sql);

$sqlSincronia = "SELECT COD_PED FROM logistica_separacao_fragmentada WHERE COD_PED = '$COD_PED'";
$resultadoSincronia = mysqli_query($conn,$sqlSincronia);
if(mysqli_num_rows($resultadoSincronia) > 0)
{
    $sqlUpdate = "UPDATE logistica_separacao_fragmentada SET SINCRONIA = 1, POSICAO = 1 WHERE COD_PED = '$COD_PED'";
    $resultadoUpdate = mysqli_query($conn, $sqlUpdate); 
}


mysqli_close($conn);

header("Location:cupomseparacao.php?SEPARADOR=$SEPARADOR_SELECIONADO&COD_PED=$COD_PED&COD_EMP=$COD_EMP&TIPO_SEPARACAO=$TIPO_SEPARACAO");



