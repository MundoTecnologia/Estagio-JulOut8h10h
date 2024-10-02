<?php

if (isset($_GET['ramires'])) {
    $mensagem = $_GET['ramires'];

    echo $mensagem;
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid black;
    }
</style>
<body>
    <h1>Cadastro</h1>

    <form action="cadastro.php" method="POST">
        <input type="text" placeholder="Digite o seu nome" name="nomeUser">
        <input type="text" placeholder="digite a sua nacionalidade" name="nacionalidadeUser">

        <input type="submit" value="Enviar" name="btn">
    </form>

    <h1>READ</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Nacionalidade</th>
            <th>Funcoes</th>
        </tr>
            <?php
                include_once 'read.php';
            ?>
    </table>

</body>
</html>