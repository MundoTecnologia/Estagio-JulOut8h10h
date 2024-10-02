<?php

    require "conexao.php";

    $idusuario = $_GET["id"];

    $nome = $_POST["nome"];
    $nacionalidade = $_POST["nacionalidade"];

    $consulta = "UPDATE informacao SET nome= :n, nacionaçlidade = :nac WHERE id = :id";
    $stmt = $conn->prepare($consulta);

    $stmt->bindParam("n", $nome);
    $stmt->bindParam("nac", $nacionalidade);
    $stmt->bindParam("id", $idusuario);
    
    $stmt->execute();

    if ($stmt) {
        header("location: index.php");
    }
    


?>