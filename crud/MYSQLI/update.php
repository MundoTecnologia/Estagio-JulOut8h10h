<?php

$conexao =mysqli_connect("localhost", "root","","pessoa");

$id="";
$nome="";
$nacionalidade="";

if($_SERVER['REQUEST_METHOD']=='GET'){
    $id = $_GET["id"];

    $sql = "SELECT * FROM informacao WHERE id='$id'";
    $retorn = mysqli_query($conexao,$sql);

    $linha = $retorn->fetch_assoc();

    $nome=$linha["nome"];
    $nacionalidade=$linha["nacionaçlidade"];
}else{
    $id=$_POST["id"];
    $nome=$_POST["nome"];
    $nacionalidade=$_POST["nacionalidade"];

    $sql = "UPDATE informacao SET nome='$nome',nacionaçlidade='$nacionalidade' WHERE id=$id";
    $retorn = mysqli_query($conexao, $sql);

    header("location:./index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name="nome" value="<?php echo $nome ?>">
        <input type="text" name="nacionalidade" value="<?php echo $nacionalidade ?>">
        <button type="submit">Alterar</button>
    </form>
</body>
</html>