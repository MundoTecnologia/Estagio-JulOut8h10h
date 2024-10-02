<?php
$conexao =mysqli_connect("localhost", "root","","pessoa");


if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM informacao WHERE id='$id'";
    $retorn = mysqli_query($conexao,$sql);

    header("location:./index.php");
}

?>