<?php

include_once "conexao.php";
$sql = "SELECT * FROM informacao";

$stmt = $conn->prepare($sql);
$stmt->execute();

if ($stmt) {

    $dados = $stmt->fetchall(PDO::FETCH_OBJ);

    foreach ($dados as $value) {
        ?>

        <tr>
        <td><?php echo $value->nome ?></td>
        <td><?php echo $value->nacionaçlidade ?></td>
        <td><a href="delete.php?id=<?php echo $value->id ?>">eLIMINAR</a>__<a href="atualizar.php?id=<?php echo $value->id ?>">atualizar</a></td>
    
        </tr>
    <?php
    }

}else {
    echo "nAO EXECUTOU";
}


#PDO::FETCH_OBJ

?>