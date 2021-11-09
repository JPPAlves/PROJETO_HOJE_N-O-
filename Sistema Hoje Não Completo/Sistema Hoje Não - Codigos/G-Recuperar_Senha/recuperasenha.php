<!--Local para recuperar a senha -->
<?php
    session_start();
    include_once('../A-ConexãoBD/config.php');
    $EmailR =$_POST['emailrecup'];
// verificando se o Gmail e usuarios existem no banco
    $sql = "SELECT * FROM usuarios where email = '$EmailR' ORDER BY idusuarios DESC";
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="/imagex/png" href="../img/favicon-16x16.png">

    <title>MINHA | CONTA</title>
    <!--Estilizando a página -->
    <style>
    body {
        background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
        color: white;
        text-align: center;
    }

    .table-bg {
        background: rgba(0, 0, 0, 0.3);
        border-radius: 15px 15px 0 0;
    }

    .alert-success {
        color: #f8f9fa;
        background-color: #ed0303;
        border-color: #cb2626;
        width: 50%;
    }

    .bg-primary {
        background-color: #252a33 !important;
        padding: 25px;
        width: 100%;
    }
    </style>
</head>

<body>
    <!--Naver bar da página -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>RECUPERAR SENHA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="../F-Login_e_Test/login.php" class="btn btn-danger me-5">VOLTAR</a>
        </div>
    </nav>
    <br>
    <br>
    <!--Criando a tabela para armazena os dados -->
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nova Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
    //Mostrando os dados buscados no bd por meio de uma repetição
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idusuarios']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['email']."</td>";
     // botões de editar e excluir                   
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='editSeha.php?idusuarios=$user_data[idusuarios]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            </td>";
                        echo "</tr>";
                    }
                    ?>

            </tbody>
        </table>
        <!--Mostrando Um alerta das funções dos botões -->
    </div>
    <center>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Atenção!</h4>
            <p>* Aperte o botão de "Editar" para modificar sua senha.</p>
            <hr>
        </div>
    </center>
</body>

</html>