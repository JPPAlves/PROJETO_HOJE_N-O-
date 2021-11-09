<!--Pagina esqueceu senha -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="/imagex/png" href="../img/favicon-16x16.png">
    <title>Sistema esqueci minha senha!</title>
    <!--Estilizando a página -->
    <style>
    body {
        background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
        color: white;
        text-align: center;
    }

    div {
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 70px;
        border-radius: 15px;
        color: #00FFFF;
    }

    input {
        padding: 20px;
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

    center {
        padding: 10%;
    }

    h1,
    h2 {
        color: white;
        text-align: center;
    }
    </style>
</head>

<body>
    <!--Recebendo o Gmail para a confirmação -->
    <h1></h1>
    <center>

        <h2>Insira o Gmail que você cadastro:</h2>
        <form action="recuperasenha.php" method="POST">
            <input type="email" name="emailrecup" placeholder="Email">
            <br><br>
            <input type="submit" name="acao"
                style="background: #08c1f0; border-radius: 6px; padding: 20px; cursor: pointer; color: #fff; border: none; font-size: 16px;"
                value="Recuperar senha!">
        </form>
    </center>
</body>

</html>