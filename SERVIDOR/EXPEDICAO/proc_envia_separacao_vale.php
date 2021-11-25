<?php

include 'conexaoMysql.php';
include 'conexaoFirebird.php';

$EMPRESA_VALE = $_POST['COD_EMP_VALE'];
$COD_VALE = $_POST['COD_VALE'];
$NOME_CLI_FOR_VALE = $_POST['NOME_CLI_FOR_VALE'];
$COD_CLI_VALE = $_POST['COD_CLI_VALE'];
$TIPO_TRANSP_VALE = $_POST['TIPO_TRANSP_VALE'];
$USU_INCLUI_VALE = $_POST['USU_INCLUI_VALE'];
$DT_EMISSAO_VALE = $_POST['DT_EMISSAO_VALE'];






$query = "SELECT FIRST 1 ITEMS_VALE.COD_VALE, ITEMS_VALE.COD_PROD,ITEMS_VALE.COD_EMP,
PRODUTOS.NOME_PROD,PRODUTOS.COD_PROD,ITEMS_VALE.OBS, PRODUTOS.LOCAL_ALMOX
FROM ITEMS_VALE  
INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_VALE.COD_PROD)
WHERE COD_VALE = $COD_VALE AND ITEMS_VALE.COD_EMP = $EMPRESA_VALE AND PRODUTOS.LOCAL_ALMOX LIKE 'AREA 51'";

$data = $connect->query($query);

foreach($data as $row)
{    

    $LOCAL_ALMOX = $row['LOCAL_ALMOX'];
       
//CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO ADICIONA NOVAMENTE
$sql = "SELECT COD_PED FROM logistica_separacao_fragmentada WHERE COD_PED = '$COD_VALE'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{
  echo"<b>JÁ ENVIDADO PARA AREA 51</b><br>";
}
else
{ 
  
  // AQUI É ADCIONADO NOVAMENTE O PEDIDO PARA SEPARAR
 
 $SITUACAO = "ENVIADO AUTO.";
 $POSICAO = 0;
 $TIPO = "VALE";
 $sql = "INSERT INTO logistica_separacao_fragmentada (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO) 
 VALUES ('$COD_VALE','$NOME_CLI_FOR_VALE','$USU_INCLUI_VALE','$TIPO_TRANSP_VALE','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_VALE','$EMPRESA_VALE','$TIPO' )";
 $resultado = mysqli_query($conn, $sql);

 echo"<b>PEDIDO ENVIADO PARA AREA51</b><br>";

}


$sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_VALE'";
 $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
 if(mysqli_num_rows($resultadoUpdate) > 0)
 {
  
 }
 else
 {
 $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
 VALUES ('$COD_VALE','$NOME_CLI_FOR_VALE')";
 $resultado = mysqli_query($conn, $sqlZ);



}
}




$query = "SELECT FIRST 1 ITEMS_VALE.COD_VALE, ITEMS_VALE.COD_PROD,ITEMS_VALE.COD_EMP,
PRODUTOS.NOME_PROD,PRODUTOS.COD_PROD,ITEMS_VALE.OBS, PRODUTOS.LOCAL_ALMOX
FROM ITEMS_VALE  
INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_VALE.COD_PROD)
WHERE COD_VALE = $COD_VALE AND ITEMS_VALE.COD_EMP = $EMPRESA_VALE AND PRODUTOS.LOCAL_ALMOX LIKE 'ARCA'";

$data = $connect->query($query);

foreach($data as $row)
{    

    $LOCAL_ALMOX = $row['LOCAL_ALMOX'];
       
//CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO ADICIONA NOVAMENTE
$sql = "SELECT COD_PED FROM logistica_separacao_fragmentada_arca WHERE COD_PED = '$COD_VALE'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{
    echo"<b>JÁ ENVIADO PARA ARCA</b><br>";
}
else
{ 
  
  // AQUI É ADCIONADO NOVAMENTE O PEDIDO PARA SEPARAR

 $SITUACAO = "ENVIADO AUTO.";
 $POSICAO = 0;
 $TIPO = "VALE";
 $sql = "INSERT INTO logistica_separacao_fragmentada_arca (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO) 
 VALUES ('$COD_VALE','$NOME_CLI_FOR_VALE','$USU_INCLUI_VALE','$TIPO_TRANSP_VALE','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_VALE','$EMPRESA_VALE','$TIPO' )";
 $resultado = mysqli_query($conn, $sql);

 echo"<b>PEDIDO ENVIADO PARA ARCA</b><br>";

}


$sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_VALE'";
 $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
 if(mysqli_num_rows($resultadoUpdate) > 0)
 {
  
 }
 else
 {
 $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
 VALUES ('$COD_VALE','$NOME_CLI_FOR_VALE')";
 $resultado = mysqli_query($conn, $sqlZ);



}
}




$query = "SELECT FIRST 1 ITEMS_VALE.COD_VALE, ITEMS_VALE.COD_PROD,ITEMS_VALE.COD_EMP,
PRODUTOS.NOME_PROD,PRODUTOS.COD_PROD,ITEMS_VALE.OBS, PRODUTOS.LOCAL_ALMOX
FROM ITEMS_VALE  
INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_VALE.COD_PROD)
WHERE COD_VALE = $COD_VALE AND ITEMS_VALE.COD_EMP = $EMPRESA_VALE AND PRODUTOS.LOCAL_ALMOX LIKE 'AZUL'";

$data = $connect->query($query);

foreach($data as $row)
{    

    $LOCAL_ALMOX = $row['LOCAL_ALMOX'];
       
//CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO ADICIONA NOVAMENTE
$sql = "SELECT COD_PED FROM logistica_separacao_fragmentada_azul WHERE COD_PED = '$COD_VALE'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{
    echo"<b>PEDIDO JÁ ENVIADO PARA AZUL</b><br>";
}
else
{ 
  
  // AQUI É ADCIONADO NOVAMENTE O PEDIDO PARA SEPARAR

 $SITUACAO = "ENVIADO AUTO.";
 $POSICAO = 0;
 $TIPO = "VALE";
 $sql = "INSERT INTO logistica_separacao_fragmentada_azul (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO) 
 VALUES ('$COD_VALE','$NOME_CLI_FOR_VALE','$USU_INCLUI_VALE','$TIPO_TRANSP_VALE','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_VALE','$EMPRESA_VALE,'$TIPO')";
 $resultado = mysqli_query($conn, $sql);

 echo"<b>PEDIDO ENVIADO PARA AZUL</b><br>";

}


$sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_VALE'";
 $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
 if(mysqli_num_rows($resultadoUpdate) > 0)
 {
  
 }
 else
 {
 
 $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
 VALUES ('$COD_VALE','$NOME_CLI_FOR_VALE')";
 $resultado = mysqli_query($conn, $sqlZ);

}
}

