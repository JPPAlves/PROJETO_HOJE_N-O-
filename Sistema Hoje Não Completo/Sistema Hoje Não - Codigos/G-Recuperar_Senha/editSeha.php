<!-- Editando o perfil do usuario-->
<?php
    include_once('../A-ConexãoBD/config.php');
// Verificando o usuario //
    if(!empty($_GET['idusuarios']))
    {
// Selecionando  o usuario  no banco de dados//       
        $id = $_GET['idusuarios'];
        $sqlSelect = "SELECT nome, senha, email FROM usuarios WHERE idusuarios=$id";
        $result = $conexao->query($sqlSelect);
// COnfirmando a quantidade e se existe usuarios no banco
        if($result->num_rows > 0)
        {
// Armazenando os dados nas variaveis por meio de repetição
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                
            }
        }
        else
        {
            header('Location: ../sistemaConta.php');
        }
    }
    else
    {
        header('Location: ../sistemaConta.php');
    }
?>

<!-- Mostrando o formulario com as infos para modificar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | Atualizar Senha </title>

    <!-- Estilizando o formulario -->
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
        width: 20%;
    }

    fieldset {
        border: 3px solid dodgerblue;
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
    </style>
</head>
<!-- Criando o formulario-->

<body>
    <div class="box">
        <form action="saveEditSenha.php" method="POST">
            <fieldset>
                <legend><b>Editar Senha</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Insira a nova Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                
                <input type="hidden" name="idusuarios" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>