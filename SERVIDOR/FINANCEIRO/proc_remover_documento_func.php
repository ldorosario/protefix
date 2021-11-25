<?php

include 'conexaoMysql.php';

$id_documento = $_POST['id_documento'];

$sql = "DELETE FROM rh_arquivo WHERE id = '$id_documento'";
$resultado  = mysqli_query($conn, $sql);
