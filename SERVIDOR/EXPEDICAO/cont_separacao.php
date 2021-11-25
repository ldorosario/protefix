<?php
include 'conexaoMysql.php';

$sql = "SELECT COUNT(COD_PED) AS CONTAGEM FROM logistica_separacao_fragmentada WHERE SITUACAO NOT LIKE 'CONCLUIDO'";

$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado)>0)
{
    while($row = mysqli_fetch_assoc($resultado))
    {
    
      echo "<h5>AREA 51 : <b>" . $row['CONTAGEM'] ."</b>  |  ";
    }
}


$sql = "SELECT COUNT(COD_PED) AS CONTAGEM FROM logistica_separacao_fragmentada_arca WHERE SITUACAO NOT LIKE 'CONCLUIDO'";

$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0 )
{
    while($row = mysqli_fetch_assoc($resultado))
    {
      echo "ARCA : <b>" . $row['CONTAGEM'] ."</b></h5>";
    }
}

?>