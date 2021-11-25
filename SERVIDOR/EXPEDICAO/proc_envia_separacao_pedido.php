<?php

$EMPRESA_PEDIDO = $_POST['EMPRESA_PEDIDO'];
$COD_PED_PEDIDO = $_POST['COD_PED_PEDIDO'];
$NOME_CLI_FOR_PEDIDO = $_POST['NOME_CLI_FOR_PEDIDO'];
$DT_EMISSAO_PEDIDO = $_POST['DT_EMISSAO_PEDIDO'];
$COD_CLI_PEDIDO = $_POST['COD_CLI_PEDIDO'];
$TIPO_TRANSP_PEDIDO = $_POST['TIPO_TRANSP_PEDIDO'];
$USU_INCLUI_PEDIDO = $_POST['USU_INCLUI_PEDIDO'];

include 'conexaoMysql.php';
include 'conexaoFirebird.php';


       
        $query = "SELECT FIRST 1 ITEMS_PEDIDO.COD_PED, ITEMS_PEDIDO.COD_PROD,ITEMS_PEDIDO.COD_EMP,
    ITEMS_PEDIDO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_PEDIDO.OBS, PRODUTOS.LOCAL_ALMOX,
    ITEMS_PEDIDO.ITEM
    FROM ITEMS_PEDIDO  
    INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_PEDIDO.COD_PROD)
    WHERE COD_PED = $COD_PED_PEDIDO AND ITEMS_PEDIDO.COD_EMP = $EMPRESA_PEDIDO AND PRODUTOS.LOCAL_ALMOX  LIKE 'AREA 51'
    ";
    
        
    
        $data = $connect->query($query);
    
        foreach($data as $row)
        {    
          
         
          //CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO, ADICIONA NOVAMENTE
          $sql = "SELECT * FROM logistica_separacao_fragmentada WHERE COD_PED = '$COD_PED_PEDIDO'";
          $resultado = mysqli_query($conn, $sql);
           if(mysqli_num_rows($resultado) > 0)
           {
              
            echo"<b>JÁ ENVIADO PARA SEPARAÇÃO AREA51</b><br>";

           }
           else
           { // AQUI É ADCIONADO NOVAMENTE O PEDIDO PARA SEPARAR
            $LOCAL_ALMOX = $row['LOCAL_ALMOX'];
            $SITUACAO = "ENVIADO AUTO.";
            $POSICAO = 0;
            $TIPO = "PEDIDO";
            $sql = "INSERT INTO logistica_separacao_fragmentada (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO,SEPARADOR) 
            VALUES ('$COD_PED_PEDIDO','$NOME_CLI_FOR_PEDIDO','$USU_INCLUI_PEDIDO','$TIPO_TRANSP_PEDIDO','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_PEDIDO','$EMPRESA_PEDIDO','$TIPO','')";
         if (mysqli_query($conn, $sql)) {
          echo "Registrado com sucesso Area 51!";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
            
           }

           
           $sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_PED_PEDIDO'";
            $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
            if(mysqli_num_rows($resultadoUpdate) > 0)
            {
              
            }
            else
            {
            $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
            VALUES ('$COD_PED_PEDIDO','$NOME_CLI_FOR_PEDIDO')";
            $resultado = mysqli_query($conn, $sqlZ);
            }
          }




          $query = "SELECT FIRST 1 ITEMS_PEDIDO.COD_PED, ITEMS_PEDIDO.COD_PROD,ITEMS_PEDIDO.COD_EMP,
          ITEMS_PEDIDO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_PEDIDO.OBS, PRODUTOS.LOCAL_ALMOX,
          ITEMS_PEDIDO.ITEM
          FROM ITEMS_PEDIDO  
          INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_PEDIDO.COD_PROD)
          WHERE COD_PED = $COD_PED_PEDIDO AND ITEMS_PEDIDO.COD_EMP = $EMPRESA_PEDIDO AND PRODUTOS.LOCAL_ALMOX  LIKE 'ARCA'
          ";
          
              
          
              $data = $connect->query($query);
          
              foreach($data as $row)
              {    
                
               
                //CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO, ADICIONA NOVAMENTE
                $sql = "SELECT * FROM logistica_separacao_fragmentada_arca WHERE COD_PED = '$COD_PED_PEDIDO'";
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
                  $TIPO = "PEDIDO";
                  $sql = "INSERT INTO logistica_separacao_fragmentada_arca (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO,SEPARADOR,DATA_CONCLUIDO) 
                  VALUES ('$COD_PED_PEDIDO','$NOME_CLI_FOR_PEDIDO','$USU_INCLUI_PEDIDO','$TIPO_TRANSP_PEDIDO','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_PEDIDO','$EMPRESA_PEDIDO','$TIPO','','')";
                  if (mysqli_query($conn, $sql)) {
                    echo "Registrado com sucesso Arca!";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                 }
      
                 
                 $sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_PED_PEDIDO'";
                  $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
                  if(mysqli_num_rows($resultadoUpdate) > 0)
                  {
                    
                  }
                  else
                  {
                  $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
                  VALUES ('$COD_PED_PEDIDO','$NOME_CLI_FOR_PEDIDO')";
                  $resultado = mysqli_query($conn, $sqlZ);
                  }
                }


                $query = "SELECT FIRST 1 ITEMS_PEDIDO.COD_PED, ITEMS_PEDIDO.COD_PROD,ITEMS_PEDIDO.COD_EMP,
          ITEMS_PEDIDO.QTDE_PED, PRODUTOS.NOME_PROD, PRODUTOS.COD_PROD,ITEMS_PEDIDO.OBS, PRODUTOS.LOCAL_ALMOX,
          ITEMS_PEDIDO.ITEM
          FROM ITEMS_PEDIDO  
          INNER JOIN PRODUTOS ON (PRODUTOS.COD_PROD = ITEMS_PEDIDO.COD_PROD)
          WHERE COD_PED = $COD_PED_PEDIDO AND ITEMS_PEDIDO.COD_EMP = $EMPRESA_PEDIDO AND PRODUTOS.LOCAL_ALMOX  LIKE 'AZUL'
          ";
          
              
          
              $data = $connect->query($query);
          
              foreach($data as $row)
              {    
                
               
                //CONFERE SE O PEDIDO JÁ FOI SEPARADOR, SE NAO, ADICIONA NOVAMENTE
                $sql = "SELECT * FROM logistica_separacao_fragmentada_azul WHERE COD_PED = '$COD_PED_PEDIDO'";
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
                  $TIPO = "PEDIDO";
                  $sql = "INSERT INTO logistica_separacao_fragmentada_azul (COD_PED,NOME_CLI_FOR,USU_INCLUI,TIPO_TRANSP,LOCAL_ALMOX,SITUACAO,POSICAO,DT_EMISSAO,EMPRESA,TIPO_SEPARACAO,SEPARADOR,DATA_CONCLUIDO) 
                  VALUES ('$COD_PED_PEDIDO','$NOME_CLI_FOR_PEDIDO','$USU_INCLUI_PEDIDO','$TIPO_TRANSP_PEDIDO','$LOCAL_ALMOX','$SITUACAO','$POSICAO','$DT_EMISSAO_PEDIDO','$EMPRESA_PEDIDO','$TIPO','','')";
                  if (mysqli_query($conn, $sql)) {
                    echo "Registrado com sucesso Azul!";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                  
                 }
      
                 
                 $sqlUpdate = "SELECT COD_PED FROM logistica_separacao_fragmentada_painel WHERE COD_PED = '$COD_PED_PEDIDO'";
                  $resultadoUpdate = mysqli_query($conn, $sqlUpdate);
                  if(mysqli_num_rows($resultadoUpdate) > 0)
                  {
                    
                  }
                  else
                  {
                  $sqlZ = "INSERT INTO logistica_separacao_fragmentada_painel (COD_PED,NOME_CLI_FOR) 
                  VALUES ('$COD_PED_PEDIDO','$NOME_CLI_FOR_PEDIDO')";
                  $resultado = mysqli_query($conn, $sqlZ);
                  }
                }
              
        
      
   