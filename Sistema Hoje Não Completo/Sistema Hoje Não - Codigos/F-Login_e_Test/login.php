<!--Criando a pagina para fazer login-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="/imagex/png" href="../img/favicon-16x16.png">
    
    <title>Tela de login</title>

    <!--Estilizando a Pagina-->
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));

    }

    div {
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: #00FFFF;
    }

    input {
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }

    .inputSubmit {
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 15px;

    }

    .inputSubmit:hover {
        background-color: deepskyblue;
        cursor: pointer;
    }

    a {
        color: #00FFFF;
    }
    </style>
</head>

<body>

    <div>
        <h1>Login</h1>
        <!--Criando o formulario Login-->
        <form action="testLogin.php" method="POST">
            <!--Criando o local Email-->
            <input type="text" name="email" placeholder="Email" required>
            <br><br>
            <!--Criando o local Senha-->
            <input type="password" name="senha" minlength="6" placeholder="Senha" required>
            <br><br>
            <!--Criando o Botão Entrar-->
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
            <br>
            <!--Criando o link cadastrar-->
            <Center><a href="../formulario.php">Cadastrar!</a></Center>
            <br>
            <!--Criando o link Esqueci senha-->
            <Center><a href="../G-Recuperar_Senha/EsqueciSenha.php">Esqueci Minha Senha!</a></Center>
    </div>
</body>

</html>