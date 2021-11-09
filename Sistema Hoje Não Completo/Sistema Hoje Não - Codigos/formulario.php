<!--Recebendo e armazenado os dados do formulario de cadastro -->
<?php
if (isset($_POST['submit'])) {
    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    // print_r('Telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['endereco']);

    include_once('./A-ConexãoBD/config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha =md5($_POST['senha']);
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: ./F-Login_e_Test/login.php');
}

?>
<!--Criando o formulario de cadastro -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/gif" href="./img/icons8-pilha-de-documentos.gif">
    <title>Formulário | Cadastro</title>

    <!--Estilizando a pagina de cadastro -->
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;

        background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
    }

    .box {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        /*width: 25%;*/
    }

    legend {
        border: 1px solid dodgerblue;
        padding: 10px;
        text-align: center;
        background-color: dodgerblue;
        border-radius: 8px;
    }

    .inputBox {
        position: relative;
    }

    .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }

    .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }

    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
        top: -20px;
        font-size: 12px;
        color: dodgerblue;
    }

    #data_nascimento {
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }

    #submit {
        background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    #submit:hover {
        background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
    }

    a {
        color: blanchedalmond;
    }
    </style>
</head>

<body>

    <!--Criando o formulario de cadrastro -->

    </div>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Cadrastos</b></legend>
                <br>
                <!--Criando o local nome-->
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <!--Criando o local Senha-->
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" minlength="6" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <!--Criando o local Email-->
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <!--Criando o local Telefone-->
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" minlength="6" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <!--Criando o local Sexo-->
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <!--Criando o local Data de nascimento-->
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <!--Criando o local Cidade-->
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <!--Criando o local Estado-->
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <!--Criando o local endereço-->
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>

                <!--Botão fazer enviar-->
                <input type="submit" name="submit" id="submit">

            </fieldset>

            <!--Botão fazer login-->
            <center><a href="./F-Login_e_Test/login.php"> Fazer Login! </a></center>
        </form>
    </div>
</body>

</html>