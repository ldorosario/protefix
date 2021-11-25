<?php

include 'conexaoMysql.php';

$COD_PED = $_POST['COD_PED'];


$sql = "SELECT*FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_PED' AND TIPO_TRANSP = '6'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{

    $sql = "UPDATE logistica_separacao_fragmentada_painel SET TIPO_TRANSP ='2'  WHERE COD_PED = '$COD_PED'";
$resultado = mysqli_query($conn, $sql);

$sql51 = "SELECT*FROM logistica_separacao_fragmentada WHERE COD_PED = '$COD_PED'";
$resultadao51 = mysqli_query($conn, $sql51);
if(mysqli_num_rows($resultadao51) > 0)
{
    $sql51Update = "UPDATE logistica_separacao_fragmentada SET POSICAO =2, TIPO_TRANSP ='2' WHERE COD_PED = '$COD_PED'";
    $resultadao51Update = mysqli_query($conn, $sql51Update);
}


$sqlARCA = "SELECT*FROM logistica_separacao_fragmentada_arca WHERE COD_PED = '$COD_PED'";
$resultadaoARCA = mysqli_query($conn, $sqlARCA);
if(mysqli_num_rows($resultadaoARCA) > 0)
{
    $sqlARCAUpdate = "UPDATE logistica_separacao_fragmentada_arca SET POSICAO =2, TIPO_TRANSP ='2' WHERE COD_PED = '$COD_PED'";
    $resultadaoARCAUpdate = mysqli_query($conn, $sqlARCAUpdate);
}
    


}
else
{

$sql = "UPDATE logistica_separacao_fragmentada_painel SET TIPO_TRANSP ='6'  WHERE COD_PED = '$COD_PED'";
$resultado = mysqli_query($conn, $sql);

$sql51 = "SELECT*FROM logistica_separacao_fragmentada WHERE COD_PED = '$COD_PED'";
$resultadao51 = mysqli_query($conn, $sql51);
if(mysqli_num_rows($resultadao51) > 0)
{
    $sql51Update = "UPDATE logistica_separacao_fragmentada SET POSICAO =2, TIPO_TRANSP ='6' WHERE COD_PED = '$COD_PED'";
    $resultadao51Update = mysqli_query($conn, $sql51Update);
}


$sqlARCA = "SELECT*FROM logistica_separacao_fragmentada_arca WHERE COD_PED = '$COD_PED'";
$resultadaoARCA = mysqli_query($conn, $sqlARCA);
if(mysqli_num_rows($resultadaoARCA) > 0)
{
    $sqlARCAUpdate = "UPDATE logistica_separacao_fragmentada_arca SET POSICAO =2, TIPO_TRANSP ='6' WHERE COD_PED = '$COD_PED'";
    $resultadaoARCAUpdate = mysqli_query($conn, $sqlARCAUpdate);
}
    
}