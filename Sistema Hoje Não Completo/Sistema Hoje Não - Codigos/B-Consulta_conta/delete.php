<!--Deletando o usuario -->
<?php

// confirmando o usuario //
    if(!empty($_GET['idusuarios']))
    {
        include_once('../A-ConexãoBD/config.php');

        $id = $_GET['idusuarios'];
// Selecionando  o usuario no bd //
        $sqlSelect = "SELECT *  FROM usuarios WHERE idusuarios=$id";
        $result = $conexao->query($sqlSelect);

// Apangando  o usuario //
        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios WHERE idusuarios=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
// Atualizando a pagina //
    header('Location: ../F-Login_e_Test/login.php');
   
?>