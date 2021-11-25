<?php
include 'conexaoMysql.php';

$id = $_POST['id'];

$sql = "UPDATE cadastrocliente SET status = 'LIBERADO' WHERE id = '$id'";

$resultado = mysqli_query($conn, $sql);