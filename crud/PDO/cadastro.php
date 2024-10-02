<?php
// include_once 'config.php';
// include_once 'class/classUsuarios.php';
// $cadastrar = new cadastrarUsuarios();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nome = $_POST['nome'];
//     $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
//     $telefone = $_POST['telefone'];
//     $email = $_POST['email'];
//     $cargo = $_POST['cargo'];
    
//     $stmt = $conn->prepare($sql);
// }else {
//     echo "nÃO FOI  POSSÍVEL ACESSAR OS DADOS ENVIADOS";
// }

include_once "conexao.php";

if (isset($_POST['btn'])){
    $nome = $_POST['nomeUser'];
    $nacionalidade = $_POST['nacionalidadeUser'];

    $sql = "INSERT INTO informacao(nome, nacionaÇlidade) VALUES ('$nome','$nacionalidade')";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    if ($stmt) {
        $mensagem = "Cadastro realizado com sucesso";
        header("location: index.php?ramires=".$mensagem);
    }else {
        "nao cadastrou";
    }

}else {
    echo "NAO FOI CLICADO";
}

?>