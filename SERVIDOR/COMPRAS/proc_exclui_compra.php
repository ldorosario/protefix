<?php
include 'conexaoMysql.php';

$id_compra = $_POST['id_compra'];

$sql = "DELETE FROM cont_compra WHERE id = '$id_compra'";

$resultado = mysqli_query($conn, $sql);


