<?php

    require "conexao.php";

    $idusuario = $_GET["id"];
    
    if($idusuario){

        $consulta = "Select * from informacao Where id = :id";
        $stmt = $conn-> prepare($consulta);
        $stmt->bindParam("id", $idusuario);
        $stmt->execute();

        if ($stmt) {
           
            $dado = $stmt->fetch();

            ?>
                <form action="Update.php?id=<?php echo    $idusuario ?>" method="POST">

                    <input type="text" name="nome" value="<?php echo $dado["nome"] ?>">
                    <input type="text" name="nacionalidade"
                    value="<?php echo $dado["nacionaçlidade"] ?> ">

                    <input type="submit" value="Atualizar" name="btn">

                </form>

            <?php
        }

    }else{

        echo "Usuario não encontrado";
    }


?>