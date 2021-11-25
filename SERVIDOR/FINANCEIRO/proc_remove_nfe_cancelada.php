<?php
include 'conexaoMysql.php';

$id = $_POST['id'];

$sql = "DELETE FROM nfe_cancelada WHERE id LIKE '$id'";
$resultado = mysqli_query($conn, $sql);