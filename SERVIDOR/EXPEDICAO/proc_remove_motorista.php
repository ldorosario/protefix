<?php
include 'conexaoMysql.php';


$id = $_POST['id'];

$sql = "DELETE FROM motoristas WHERE id LIKE '$id'";

$resultado = mysqli_query($conn, $sql);