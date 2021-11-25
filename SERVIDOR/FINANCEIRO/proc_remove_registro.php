<?php

$id = $_POST['id'];

include 'conexaoMysql.php';

$sql = "DELETE from cheque WHERE id LIKE '$id'";
$resultado = mysqli_query($conn, $sql);
