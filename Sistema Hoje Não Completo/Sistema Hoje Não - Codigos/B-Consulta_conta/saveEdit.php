<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../A-ConexãoBD/config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['idusuarios'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
// salvando os dados no Banco         
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE idusuarios= $id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: http://localhost/sistema-PDS/Sistema_Hoje_Não/sistemaConta.php');

?>