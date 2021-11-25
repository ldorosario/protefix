<?php
include 'conexaoMysql.php';

$id_compra = $_POST['id_compra'];

$sql = "DELETE FROM cont_compra WHERE id = '$id_compra'";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

