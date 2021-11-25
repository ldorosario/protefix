<?php
include 'conexaoMysql.php';

$status = $_POST['status'];

$sql = "UPDATE status_cadastro SET status_atual = '$status' WHERE id LIKE 1";
$resultado = mysqli_query($conn,$sql);
