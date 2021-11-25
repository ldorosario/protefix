<?php
include 'conexaoMysql.php';

$id = $_POST['id'];

$sql = "UPDATE cheque SET situacao = 'PAGO' WHERE id = '$id'";
$resultado  = mysqli_query($conn, $sql);