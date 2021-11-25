<?php
include 'conexaoMysql.php';



$cnpj = $_POST['cnpj'];
$razaosocial = $_POST['razaosocial'];
$fantasia = $_POST['fantasia'];
$atividade = $_POST	['atividade'];
$telefone = $_POST['tele'];
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y');
$status = "AGUARDE";
$email = $_POST['email'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf'];
$vendedor = $_POST['vendedor'];
$cidade = $_POST['cidade'];
$compra = $_POST['compra'];
$emailnfeboleto = $_POST['emailnfeboleto'];
$clienteloja = $_POST['clienteloja'];
$infoadicional = $_POST['infoadicional'];

$sql ="SELECT*FROM cadastrocliente WHERE cnpj LIKE '$cnpj'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) > 0)
{
   
}
else
{
    $sql = "INSERT INTO cadastrocliente (cnpj,razaosocial,fantasia,atividade,telefone,status,email,logradouro,numero,complemento,bairro,uf,vendedor,cidade,compra,emailnfeboleto,clienteloja,infoadicional,data_cadastro) 
    VALUES 
    ('$cnpj','$razaosocial','$fantasia','$atividade','$telefone','$status','$email','$logradouro','$numero','$complemento','$bairro','$uf','$vendedor','$cidade','$compra','$emailnfeboleto','$clienteloja','$infoadicional','$data')";
    
    $resultado = mysqli_query($conn, $sql);
}


