<?php
include 'conexaoMysql.php';

$id_parentesco = $_POST['id_parentesco'];

$sql = "DELETE FROM rh_ficha_familiar_funcionario WHERE id = '$id_parentesco'";

$resultado = mysqli_query($conn, $sql);
