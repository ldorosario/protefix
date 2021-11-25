<?php
include 'conexaoMysql.php';

$COD_PED = $_POST['COD_PED'];


$sqlSeparador = "SELECT SEPARADOR FROM logistica_separacao_fragmentada_arca WHERE COD_PED = '$COD_PED'";
$resultadoSeparador = mysqli_query($conn, $sqlSeparador);
if(mysqli_num_rows($resultadoSeparador) > 0)
   {
     while($row = mysqli_fetch_assoc($resultadoSeparador))           //MOSTRA OS SE DISPONIVEIS NO SELECT.
     {
        $SEPARADOR = $row['SEPARADOR'];
    }
    
}


$VOLUME = $_POST['VOLUME'];

date_default_timezone_set('America/Araguaina');
$DATA_CONCLUIDO = date('d/m/Y h:i:sa');

$sql = "UPDATE logistica_separacao_fragmentada_arca SET SITUACAO ='CONCLUIDO', DATA_CONCLUIDO = '$DATA_CONCLUIDO' WHERE COD_PED = '$COD_PED'";
$resultado = mysqli_query($conn, $sql);

$sql = "UPDATE logistica_separacao_fragmentada_painel SET SITUACAO_ARCA = '$SEPARADOR / CONCLUIDO / $VOLUME' WHERE COD_PED ='$COD_PED'";
$resultado = mysqli_query($conn, $sql);


header("Location:/CLIENTE/SEPARACAO/ARCA");