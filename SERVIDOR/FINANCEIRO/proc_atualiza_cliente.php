<?php
include 'conexaoMysql.php';
$id = $_POST['id'];
date_default_timezone_set('America/Sao_Paulo');
$data = date('d-m-Y h:i:sa');
$cnpj = $_POST['cnpj'];
$razaosocial = $_POST['razaosocial'];
$fantasia = $_POST['fantasia'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf'];
$compra = $_POST['compra'];
$vendedor = $_POST['vendedor'];
$codcliente = $_POST['codcliente'];
$status = $_POST['status'];
$emailnfeboleto = $_POST['emailnfeboleto'];
$limitecredito = $_POST['limitecredito'];
$infoadicional = $_POST['infoadicional'];
$data_cadastro = $_POST['data_cadastro'];
 
$sql = "UPDATE cadastrocliente SET 	cnpj ='$cnpj', data_cadastro ='$data_cadastro',razaosocial ='$razaosocial', fantasia ='$fantasia', telefone ='$telefone', email ='$email',
 complemento ='$complemento', cidade ='$cidade', bairro ='$bairro', uf ='$uf', compra ='$compra', vendedor ='$vendedor', codcliente ='$codcliente',
  status ='$status', logradouro ='$logradouro', numero ='$numero', emailnfeboleto ='$emailnfeboleto', limitecredito = '$limitecredito', 
  infoadicional ='$infoadicional' WHERE id LIKE '$id'";
  $resultado = mysqli_query($conn, $sql);



?>