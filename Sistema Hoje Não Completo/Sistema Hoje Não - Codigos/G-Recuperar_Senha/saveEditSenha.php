<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../A-ConexãoBD/config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['idusuarios'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
   // salvando os dados no Banco         
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email'
        WHERE idusuarios=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: http://localhost/sistema-PDS/Sistema_Hoje_Não/sistemaConta.php');

?>