<?php
include 'conexaoMysql.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$parentesco = $_POST['parentesco'];


$sql  ="INSERT INTO rh_ficha_familiar_funcionario (nome,nascimento,parentesco,id_funcionario) VALUES ('$nome','$nascimento','$parentesco','$id')";


$resultado = mysqli_query($conn, $sql);
