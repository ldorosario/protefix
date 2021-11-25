<?php

include 'conexaoMysql.php';

$sql = "SELECT*FROM status_cadastro WHERE id LIKE 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
     {
        echo $row['status_atual'];
     }
    }
