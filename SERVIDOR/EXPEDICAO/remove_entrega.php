<?php

include 'conexaoMysql.php';

$id = $_POST['id'];

$sql = "DELETE FROM logistica_entrega WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql);
