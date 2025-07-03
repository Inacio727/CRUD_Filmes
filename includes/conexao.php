<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbne = "catalogo_filmes";

$conn = mysqli_connect($host, $user, $pass, $dbne);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>