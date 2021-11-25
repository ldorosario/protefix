<?php

include 'conexaoMysql.php';

$id = $_POST['id'];

$sql = "DELETE FROM cont_remover WHERE id LIKE '$id'";
$resultado = mysqli_query($conn, $sql);

