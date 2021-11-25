<?php

$id = $_POST['id'];

include 'conexaoMysql.php';

$sql = "DELETE FROM logistica_separacao WHERE id LIKE '$id'";
$resultado = mysqli_query($conn, $sql);