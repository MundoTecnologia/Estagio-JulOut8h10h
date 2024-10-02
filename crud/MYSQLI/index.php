<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./cadastrar.php" method="post">
        <input type="text" name="nome" id="" placeholder="Nome">
        <input type="text" name="nacionalidade" id="" placeholder="Nacionalidade">
        <button type="submit">CADASTRAR</button>
    </form>
    

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>Nacionalidade</th>
            <th>OPERAÇÕES</th>
            
        </tr>

        <?php
        $conexao = mysqli_connect("localhost","root","","pessoa");

        $sql = "SELECT * FROM informacao";
        $retorn = mysqli_query($conexao,$sql);

        while($linha = $retorn->fetch_assoc()){
            echo"
            <tr>
            <td>$linha[id]</td>
            <td>$linha[nome]</td>
            <td>$linha[nacionaçlidade]</td>
            <td>
               <a href='./update.php?id=$linha[id]'> <button>Editar</button></a>
               <a href='./delete.php?id=$linha[id]'> <button>ELIMINAR</button></a>
            </td>
        </tr>
            ";
        }
?>
    </table>
</body>
</html>

