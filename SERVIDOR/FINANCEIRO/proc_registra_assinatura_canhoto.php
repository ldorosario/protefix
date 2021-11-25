<?php

include 'conexaoMysql.php';

$NUM_NOTA = $_POST['NUM_NOTA'];
$ASSINATURA = $_POST['ASSINATURA'];

$sql = "SELECT*FROM logistica_entrega WHERE NUM_NOTA LIKE '$NUM_NOTA'";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0)
{  
    $sql = "UPDATE logistica_entrega SET ASS_CANHOTO = '$ASSINATURA' WHERE NUM_NOTA LIKE '$NUM_NOTA'";
    if (mysqli_query($conn, $sql)) {
        echo "REGISTRO ALTERADO COM SUCESSO!";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }      

    }
else
{
    $sql = "INSERT INTO logistica_entrega (NUM_NOTA,ASS_CANHOTO,MOTORISTA) VALUES ('$NUM_NOTA','$ASSINATURA','SEM REGISTRO')";
    if (mysqli_query($conn, $sql)) {
        echo "NOVA ENTRADA REGISTRADA COM SUCESSO!";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
          ;
  
}
