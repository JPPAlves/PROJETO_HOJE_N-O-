<!--Fazendo o teste se o logins existe-->
<?php
    //Iniciando uma sesão
    session_start();
    // print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty(md5($_POST['senha']))) {
    // Acessa
    include_once('../A-ConexãoBD/config.php');
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    // fazendo uma busca no Banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    //Armazenando as informações
    $result = $conexao->query($sql);

    // validando se existe usuarios no bd e se senha ou Gmail estão  Corretos
    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

    //Alerta se Gmail e senha não existirem
       $message = 'Senha ou Gmail Invalidos tente Novamente';
        echo "<SCRIPT> alert('$message');
        window.location.replace('../F-Login_e_Test/login.php');
             </SCRIPT>";
                  
    //Entrando no sistema se Gmail e senha estirem certos    
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../sistema');
    }
} else {
    // Não acessa    
    header('Location: ../F-Login_e_Test/login.php');
    mysql_close();
}
?>