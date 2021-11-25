<?php

$EMPRESA_ORC = $_POST['EMPRESA_ORC'];
$COD_ORC = $_POST['COD_ORC'];
$NOME_CLI_FOR_ORC = $_POST['NOME_CLI_FOR_ORC'];
$COD_CLI_ORC = $_POST['COD_CLI_ORC'];
$TIPO_TRANSP_ORC = $_POST['TIPO_TRANSP_ORC'];
$USU_INCLUI_ORC = $_POST['USU_INCLUI_ORC'];
$DT_EMISSAO_ORC = $_POST['DT_EMISSAO_ORC'];

$SITUACAO = "EM SEPARACAO";
$SEPARADOR = $_POST['SEPARADOR'];

include 'conexaoMysql.php';
include 'conexaoFirebird.php';

date_default_timezone_set('America/Araguaina'); //HORARIO NESSA ZONA É -1 DE BRASILIA, SE HOUVER HORARIO DE VERAO NOVAMENTE RETORNAR PARA ZONA DE SAO_PAULO
$DATA = date('d-m-Y h:i:sa');
$sql = "INSERT INTO logistica_separacao (SEPARADOR,COD_PED,NOME_CLI_FOR,SITUACAO,TIPO_TRANSP,COD_CLI,DATA,VENDEDOR,ASS_CANHOTO,ENVIADO_SEPARACAO,PAINEL,COMPRADOR) 
VALUES ('$SEPARADOR','$COD_ORC','$NOME_CLI_FOR_ORC','$SITUACAO','$TIPO_TRANSP_ORC','$COD_CLI_ORC','$DATA','$USU_INCLUI_ORC','','','','')";
if (mysqli_query($conn, $sql)) {
  echo "Registrado com sucesso!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$queryb = "SELECT FIRST 1 ITEMS_ORCAMENTO.COD_ORC, ITEMS_ORCAMENTO.COD_PROD,PRODUTOS.LOCAL_ALMOX,
   ITEMS_ORCAMENTO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_ORCAMENTO.OBS, ITEMS_ORCAMENTO.COD_EMP
   FROM ITEMS_ORCAMENTO  
   INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_ORCAMENTO.COD_PROD)
   WHERE COD_ORC = $COD_ORC AND ITEMS_ORCAMENTO.COD_EMP = $EMPRESA_ORC  AND PRODUTOS.LOCAL_ALMOX LIKE 'AZUL'";
   
   $data2 = $connect->query($queryb);
   
   foreach($data2 as $row)
   {    
     
    
     //CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO ADICIONA NOVAMENTE
     $sql = "SELECT COD_PED FROM logistica_separacao_fragmentada_azul WHERE COD_PED = '$COD_ORC'";
     $resultado = mysqli_query($conn, $sql);
      if(mysqli_num_rows($resultado) > 0)
      {
     
        echo"<b>JÁ ESTA NA LISTA PARA SEPARAÇÃO AZUL</b><br>";
    
      }
      else
      { // AQUI É ADCIONADO NOVAMENTE O PEDIDO PARA SEPARAR
       $LOCAL_ALMOX = $row['LOCAL_ALMOX'];
       $SITUACAO = "ENVIADO AUTO.";
       $POSICAO = 0;
       $TIPO = "ORCAMENTO";
       $sql = "INSERT INTO logistica_separacao_fragmentada_azul (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO) 
       VALUES ('$COD_ORC','$NOME_CLI_FOR_ORC','$USU_INCLUI_ORC','$TIPO_TRANSP_ORC','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_ORC','$EMPRESA_ORC','$TIPO')";
       $resultado = mysqli_query($conn, $sql);
      
       
       echo"<b>ENVIADO PARA AZUL</b><br>";
      

      }
    }