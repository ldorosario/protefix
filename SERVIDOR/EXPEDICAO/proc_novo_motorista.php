<?php

include 'conexaoMysql.php';



$novo_motorista = strtoupper($_POST['novo_motorista']);
$sql = "SELECT*FROM motoristas WHERE nome = '$novo_motorista'";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado)>0)
{
   
    echo"<script>Alert('Motorista já cadastrado')</script>";
    
}
else
{

    $sql = "INSERT INTO motoristas (nome,x,y) VALUE ('$novo_motorista','','')";
    $resultado = mysqli_query($conn, $sql);
 
}