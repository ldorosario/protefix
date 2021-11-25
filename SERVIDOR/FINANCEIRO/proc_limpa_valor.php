<?php

include 'conexaoMysql.php';


$sql = "UPDATE soma_cheque SET valor_soma = '0' WHERE id LIKE '1'";

$resultado  = mysqli_query($conn, $sql);

