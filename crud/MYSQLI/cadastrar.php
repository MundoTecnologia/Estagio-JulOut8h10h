<?php
 
$conexao = mysqli_connect("localhost","root","","pessoa");

if(!$conexao){
    echo"sem conexao::::";
}else{
    echo "Conectado::::";


    $nome = $_POST["nome"];
    $nacionalidade = $_POST["nacionalidade"];


    $sql = "INSERT INTO pessoa.informacao(nome,nacionaçlidade) VALUES('$nome','$nacionalidade')";
     $result = mysqli_query($conexao, $sql);
     
}


?>