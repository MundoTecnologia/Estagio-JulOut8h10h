<?php

    require "conexao.php";

    $idusuario = $_GET["id"];

    $consulta = "DELETE FROM informacao WHERE id = '$idusuario'";
    
    $stmt = $conn->prepare($consulta);
    // $stmt->bindParam("id", $idusuario);

    $stmt->execute();

    if ($stmt) {
        header("location: index.php");
    }
    


?>