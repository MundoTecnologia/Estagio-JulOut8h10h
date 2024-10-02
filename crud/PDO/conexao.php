<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "pessoa";

try {
    $conn = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($conn) {
        #echo "Deu";
    }else {
        echo "Falha na conexão";
    }
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>