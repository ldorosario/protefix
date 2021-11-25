<?php

include 'conexaoMysql.php';
session_start();

$email = mysqli_real_escape_string($conn,  $_POST['email']);
$senha =  mysqli_real_escape_string($conn, $_POST['senha']);

$sql = "SELECT*FROM usuario WHERE usuario = '$email' AND senha ='$senha'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{
    while($row = mysqli_fetch_assoc($resultado))
    {
        $sessao = $row['nivel'];
    
        $_SESSION['sessao'] = $sessao;

        header("Location: /CLIENTE/".$sessao."");

        
        
    
    }
}else
{
   header("location:/");
}
