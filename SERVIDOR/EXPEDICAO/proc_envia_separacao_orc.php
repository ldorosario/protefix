<?php

include 'conexaoMysql.php';
include 'conexaoFirebird.php';
  

$EMPRESA_ORC = $_POST['EMPRESA_ORC'];
$COD_ORC = $_POST['COD_ORC'];
$NOME_CLI_FOR_ORC = $_POST['NOME_CLI_FOR_ORC'];
$COD_CLI_ORC = $_POST['COD_CLI_ORC'];
$TIPO_TRANSP_ORC = $_POST['TIPO_TRANSP_ORC'];
$USU_INCLUI_ORC = $_POST['USU_INCLUI_ORC'];
$DT_EMISSAO_ORC = $_POST['DT_EMISSAO_ORC'];



   $querya = "SELECT FIRST 1 ITEMS_ORCAMENTO.COD_ORC, ITEMS_ORCAMENTO.COD_PROD,PRODUTOS.LOCAL_ALMOX,
   ITEMS_ORCAMENTO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_ORCAMENTO.OBS, ITEMS_ORCAMENTO.COD_EMP
   FROM ITEMS_ORCAMENTO  
   INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_ORCAMENTO.COD_PROD)
   WHERE COD_ORC = $COD_ORC AND ITEMS_ORCAMENTO.COD_EMP = $EMPRESA_ORC  AND PRODUTOS.LOCAL_ALMOX LIKE 'AREA 51'";
   
   $data = $connect->query($querya);
   
   foreach($data as $row)
   {    
     
    
     //CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO ADICIONA NOVAMENTE
     $sql = "SELECT COD_PED FROM logistica_separacao_fragmentada WHERE COD_PED = '$COD_ORC'";
     $resultado = mysqli_query($conn, $sql);
      if(mysqli_num_rows($resultado) > 0)
      {
     
        echo"<b>JÁ ENVIADO PARA SEPARAÇÃO AREA 51</b><br>";
    
      }
      else
      { // AQUI É ADCIONADO NOVAMENTE O PEDIDO PARA SEPARAR
       $LOCAL_ALMOX = $row['LOCAL_ALMOX'];
       $SITUACAO = "ENVIADO AUTO.";
       $POSICAO = 0;
       $TIPO = "ORCAMENTO";
       $sql = "INSERT INTO logistica_separacao_fragmentada (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO) 
       VALUES ('$COD_ORC','$NOME_CLI_FOR_ORC','$USU_INCLUI_ORC','$TIPO_TRANSP_ORC','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_ORC','$EMPRESA_ORC','$TIPO')";
       $resultado = mysqli_query($conn, $sql);
      
       echo"<b>PEDIDO ENVIADO PARA 51</b><br>";

      }

      
      $sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_ORC'";
       $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
       if(mysqli_num_rows($resultadoUpdate) > 0)
       {
        
           

       }
       else
       {
       $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
       VALUES ('$COD_ORC','$NOME_CLI_FOR_ORC')";
       $resultado = mysqli_query($conn, $sqlZ);


      
      }
     }
   


   $queryb = "SELECT FIRST 1 ITEMS_ORCAMENTO.COD_ORC, ITEMS_ORCAMENTO.COD_PROD,PRODUTOS.LOCAL_ALMOX,
   ITEMS_ORCAMENTO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_ORCAMENTO.OBS, ITEMS_ORCAMENTO.COD_EMP
   FROM ITEMS_ORCAMENTO  
   INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_ORCAMENTO.COD_PROD)
   WHERE COD_ORC = $COD_ORC AND ITEMS_ORCAMENTO.COD_EMP = $EMPRESA_ORC  AND PRODUTOS.LOCAL_ALMOX LIKE 'ARCA'";
   
   $data2 = $connect->query($queryb);
   
   foreach($data2 as $row)
   {    
     
    
     //CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO ADICIONA NOVAMENTE
     $sql = "SELECT COD_PED FROM logistica_separacao_fragmentada_arca WHERE COD_PED = '$COD_ORC'";
     $resultado = mysqli_query($conn, $sql);
      if(mysqli_num_rows($resultado) > 0)
      {
     
        echo"<b>JÁ ENVIADO PARA SEPARAÇÃO ARCA</b><br>";
    
      }
      else
      { // AQUI É ADCIONADO NOVAMENTE O PEDIDO PARA SEPARAR
       $LOCAL_ALMOX = $row['LOCAL_ALMOX'];
       $SITUACAO = "ENVIADO AUTO.";
       $POSICAO = 0;
       $TIPO = "ORCAMENTO";
       $sql = "INSERT INTO logistica_separacao_fragmentada_arca (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO) 
       VALUES ('$COD_ORC','$NOME_CLI_FOR_ORC','$USU_INCLUI_ORC','$TIPO_TRANSP_ORC','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_ORC','$EMPRESA_ORC','$TIPO')";
       $resultado = mysqli_query($conn, $sql);
      
       echo"<b>PEDIDO ENVIADO PARA ARCA</b><br>";

      }

      
      $sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_ORC'";
       $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
       if(mysqli_num_rows($resultadoUpdate) > 0)
       {
        
       }
       else
       {
       $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
       VALUES ('$COD_ORC','$NOME_CLI_FOR_ORC')";
       $resultado = mysqli_query($conn, $sqlZ);


      
      }
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
     
        echo"<b>JÁ ENVIADO PARA SEPARAÇÃO AZUL</b><br>";
    
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
      
       
       echo"<b>PEDIDO ENVIADO PARA AZUL</b><br>";
      

      }

      
      $sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_ORC'";
       $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
       if(mysqli_num_rows($resultadoUpdate) > 0)
       {
        
       }
       else
       {
       $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
       VALUES ('$COD_ORC','$NOME_CLI_FOR_ORC')";
       $resultado = mysqli_query($conn, $sqlZ);


      
      }
     }
   