
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "protefix";

// cria a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// verifica a conexao

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
