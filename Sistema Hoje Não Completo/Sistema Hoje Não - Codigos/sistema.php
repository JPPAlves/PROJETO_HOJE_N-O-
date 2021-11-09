<!--Criando a pagina Sistema e iniciando a seção-->
<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ./F-Login_e_Test/login.php');
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/favicon-16x16.png">
    
    <title>SISTEMA </title>

    <!-- Alerta do botão de Denuncia-->
    <script type="text/javascript">
    function redirecionar1() {
        swal({


                title: "ATENÇÃO!",
                text: "Você Deseja Fazer Uma  Denuncia?",
                buttons: ["Sim", "Não"],
                dangerMode: true,
            })

            .then((willDelete) => {
                if (willDelete) {
                    window.location = "sistema.php";
                } else {
                    window.location = "./E-Formulario_Denuncia/formularioDenuc.php";

                }
            });
    }
         
                </script>

                <!-- Alerta do botão de Emergencia-->
                <script type="text/javascript">
                function redirecionar2() {


                    swal({
                        title: "ATENÇÃO!",
                        text: "Ligação de Emergência acaminho... Deseja cancelar?",
                        button: "Sim",

                    });
                }
            
    </script>

   
  

                <!-- Alerta do botão de Emergencia-->
                <script type="text/javascript">
                function redirecionar2() {


                    swal({
                        title: "ATENÇÃO!",
                        text: "Ligação de Emergência acaminho... Deseja cancelar?",
                        button: "Sim",

                    });
                }
            
    </script>

            <!-- Alerta(Modal) do botão de Sair  -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Atenção</h4>
                        </div>
                        <div class="modal-body">
                            Deseja sair do Sistema ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                            <a class="btn btn-primary" href="./F-Login_e_Test/login.php"> Sim</a>
                        </div>
                    </div>
                </div>
            </div>
                
   </head>

            <!-- Criando o sistema-->

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <a>
                        <h1>Sistema Hoje Não!</h1>
                    </a>
                    <!-- Criando as redes socias -->
                </div>
                <div class="redes-sociais">
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/governosp/">
                                <img src="./img/rss.png" />
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="./img/face.png" />
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="./img/tw.png" />
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="./img/linkedin.png" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <!-- Criando o menu principal-->
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href=""><b>Inicio</b></a>
                    </li>
                    <li>
                        <a href=" ./D-Header_Inicial/QmSomos.php"><b>Somos</b></a>
                    </li>
                    <li>
                        <a href="./D-Header_Inicial/Servicos.php"><b>Serviços</b></a>
                    </li>
                    <li>
                        <a href="./D-Header_Inicial/Termos.php"> <b>Termos de Uso</b></a>
                    </li>

                    <li>
                        <a href="sistemaConta.php"> <b>Minha Conta</b></a>
                    </li>

                    <li>
                    <a href="#" data-toggle="modal" data-target="#myModal">Sair</a>
                    </li>
                </ul>
            </div>
        </div>

    </main>
    <!-- Criando o carrosel-->
    <div class="col-100">
        <div class="slider-principal">
            <img src="./img/R.jfif" />
            <img src="./img/R.jfif" />
            <img src="./img/R.jfif" />
            <img src="./img/R.jfif" />
        </div>
    </div>
    <div class="col-100">
        <br>
        <br>
        <div class="content texto-destaque">
            <h1><strong>Faça e acompanhe aqui a sua denucia de forma simples</strong>.</h1>
            <div id="acompanhar" class="cell">
                <div class="divisor">
                    <br><br><img src="./img/ico_azul.png" title="Acompanhar solicitação" alt="Acompanhar solicitação">
                    <br><br>
                    <!-- Criando o acompanhe sua denuncia-->
                    <form name="Cadastro" action="./C-Consurtar_Denuncia/consutar.php" method="POST">
                        <h3>Acompanhar a Denuncia</h3>
                </div>
                <input name="_token" type="hidden" value="ABPhcGGexOJhNz5KMgM5PAYD0d11MQoTl2NYBWwt">
                <div class="inline">
                    <br>
                    <input class="nome" required="required" placeholder="Digite seu nome completo " name="nome"
                        type="text">
                    <br>
                </div>
                <br>
                <div class="inline button">
                    <input type="submit" value="Pesquisa">
                </div>
                </form>
                <br>
            </div>
            <!-- Criando o botão fazer denuncia-->
            <div id="nova_ocorrencia" class="cell">
                <br>
                <br><br> <img src="./img/ico_amarelo.png" title="Registrar nova ocorrência"
                    alt="Registrar nova ocorrência">
                <br><br><br> <a onclick="redirecionar1();"><button
                        style="background: linear-gradient(to right,rgb(232,49,204), rgb(2, 228, 220)); border-radius: 6px; padding: 25px; cursor: pointer; color: #fff; border: none; font-size: 16px;"><b>Faça
                            Sua Denuncia</b></button></a>
                <br> <br> <br>
                <br> <br>
            </div>
            <br> <br> <br>
            <br><br>
            <!-- Criando o botão emergencia-->
            <div id="BotaoEmergencia" class="cell">
                <br>
                <h1><strong>Aperte quando ouver emergencias</strong>.</h1>
                <br><br><br> <a><button onclick="redirecionar2()"
                        style="background: #f71a1a; border-radius: 6px; padding: 35px; cursor: pointer; color: #fff; border: none; font-size: 75px;"><b>Emergêcia</b></button></a>
                <br><br><br>
                <br>
            </div>
        </div>
    </div>
    <!-- Criando o roda pé-->
    <footer>
        <div class="col-100 footer">
            <div class="content">
                <div class="col-4">
                    <br>
                    <h3><b>Popular Post</b></h3>
                    <p class="clock">14-Agosto 2021
                    <p>
                    <p>Garanto que você terá uma
                        ótima experiencia</p>
                    <p class="clock">14-Agosto 2021
                    <p>
                </div>
                <div class="col-4">
                    <br>
                    <h3><b>Tags</b></h3>
                    <p>Mais de 700.000 usuários impactados pela solução, Disponibilizamos um canal direto com nossos
                        profissionais de Suporte e Sucesso do Cliente.
                    </p>
                    <p>
                        #NikePatrocinaNós
                    </p>
                </div>
                <div class="col-4">
                    <br>
                    <h3><b>Quem Somos</b></h3>
                    <p>
                        Alunos do Intistuto Federal de Guajará-Mirim, Aqui criando o sistema
                        com intuito de garantir uma maior flexibilidade em denuncias.
                    </p>
                </div>
                <div class="col-4">
                    <br>
                    <h3><b>Localização/Contato</b></h3>

                    <p class="local">Guajará-Mirim-RO
                    <p>
                    <p class="emailico">HojeNao@gmail.com
                    <p>
                    <p class="telefoneico">69 9999-9999
                    <p>
                </div>
            </div>
        </div>
    </footer>
    <div class="content">
    </div>
    </div>
    <!-- Importando os js-->
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/1e592b5726.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

<!-- Estilizando a pagina-->
<style>
body {
    width: 100%;
    height: 100%;
    margin: 0 auto;
    background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
}

ul {
    padding: 0px !important;
}

.menu-principal {
    width: 100%;
    background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
    height: 65px;
    padding: 10px;
}

main,
.content {
    margin: 0 auto;
    width: 990px;
    position: relative;
}

.logo {
    float: left;
    padding: 0px;
    width: 65%;
}

.redes-sociais ul li {
    margin-left: 25px;
    display: inline-block;
    float: left;
    list-style: none;
}

.redes-sociais {
    width: 20%;
    float: right;
}

.header-2 {

    width: 980px;
    margin: 0 auto;
    color: rgb(255, 255, 255);


}

.divisor {
    position: relative;

}

.menu-urls {
    height: 80px;
    border-bottom: 3px solid #00b7ff38;
}

.menu ul li {
    display: inline-block;
    color: #8b8b8b;
    margin-left: 15px;
    height: 50px;
}

.menu ul li:hover {
    border-bottom: 3px solid #c600a5;
}

.menu ul li a:hover {
    color: #c600bc;

}

.menu ul li a {
    color: #ffffff;
    text-decoration: none;
    font-size: 18px;
    text-transform: uppercase;
    font-family: none;
}

.menu {
    width: 70%;
    float: left;
}

.busca {
    text-align: center;
    width: 10%;
    float: right;
}

.busca input {
    background-image: url(./img/icone-search.png);
    background-repeat: no-repeat;
    height: 36px;
    padding: 12px;
    width: 180px;
    margin-top: 15px;
    background-position: 96%;
    border: 1px solid #f51d9b;
}

.col-100.footer {
    width: 100%;
    float: left;
    background-color: #4f504e;
}

.item-active img {
    background-size: cover;
}

button.slick-prev {
    font-size: 0px;
    border: none;
    width: 25px;
    height: 51px;
    z-index: 9;
    background-color: transparent;
    position: absolute;
    background-image: url(../img/anterior.png);
    top: 35%;
    left: 14%;
}

button.slick-next {
    font-size: 0px;
    border: none;
    width: 25px;
    height: 51px;
    z-index: 9;
    background-color: transparent;
    position: absolute;
    background-image: url(../img/proximo.png);
    top: 35%;
    right: 14%;
}

button,
input {
    margin: 0;
    /* font-family: inherit; */
    font-size: inherit;
    line-height: 30px;
    border-radius: 6px;
}

.slick-list {
    width: 100% !important;
}

.slick-initialized {
    overflow: hidden;
}

.slick-dots li button {
    font-size: 0px;
    border: 5px solid #ffffff;
    width: 26px;
    height: 26px;
    background: transparent;
    border-radius: 50%;
    cursor: pointer;

}

.slick-dots {
    margin: 0 auto;
    width: 50%;
    position: absolute;
    left: 50%;
    top: 600px;
}

li.slick-active button {
    background: #00bac6;
}

.slick-dots li {
    padding-left: 10px;
    display: inline-block;
}

.texto-destaque {
    text-align: center;
}

.texto-destaque strong {
    color: #000000;
}

-destaque h1 {
    text-transform: uppercase;
    font-size: 24px;
    color: #000000;
}

.texto-destaque p {
    font-size: 15px;
    color: #000000;
}

.col-3 {
    text-align: center;
    padding-left: 15px;
    padding-right: 15px;
    width: 29%;
    float: left;
    position: relative;
}

.bloco-imagem img {
    margin: 0 auto;
    width: 100%;
    height: auto;
}

.bloco-imagem {
    height: 300px;
    border: 1px solid #000000;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-left: 10px;
}

.bloco-imagem b,
p {
    text-align: left;
}

.bloco-texto {
    margin-top: 3em;
}

h3 {
    font-weight: normal !important;
}

.bloco-imagens-texto {
    background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
}

.bloco-imagens-texto:before {
    width: 100%;
    display: inline-block;
    content: '';
    height: 52px;
    background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
    background-repeat: no-repeat;
    background-position: center;
}

.bloco-imagens-texto:after {
    width: 100%;
    display: inline-block;
    content: '';
    height: 0px;
    background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
}

.col-4 {
    float: left;
    width: 25%;
    text-align: center;
}

.col-4 img {
    cursor: pointer;
    margin: 0 auto;
    padding-top: 1em;
    vertical-align: middle;
}

.col-4 img:hover {
    margin-top: 10px !important;
    position: relative !important;
}

.bloco-logos {
    height: 160px;
}

.bloco-logos img {
    margin-top: 30px;
}

.footer h3 {
    text-align: left;
}

.footer {
    background-image: url('../img/footer.png');
    color: #ffffff;
}




.footer p {
    width: 90%;
    text-align: left;
}

.footer-2 p {
    padding: 10px;
}

.clock {
    color: #898989 !important;
}

.clock:before {
    content: '';
    width: 15px;
    height: 15px;
    display: inline-block;
    background-image: url('./img/clock.png');
    float: left;
    background-repeat: no-repeat;
    padding-left: 5px;
}

.local:before,
.emailico:before,
.telefoneico:before {
    content: '';
    width: 17px;
    height: 24px;
    display: inline-block;
    float: left;
    background-repeat: no-repeat;
    padding-left: 5px;
}

.local:before {
    background-image: url('./img/local.png');
}

.emailico:before {
    background-image: url('./img/email.png');
}

.telefoneico:before {
    background-image: url('./img/telefoneico.png');
}

#acompanhar {
    width: 40%;
    height: 30%;
    border: 5px;
    display: inline-block;
}

#nova_ocorrencia {
    width: 40%;
    height: 30%;
    border: 5px;
    display: inline-block;

}

.aaa {
    border: color #000;
    border: 5px;
}

.menu-principal h1 {
    color: #ffffff;
}

form {

    border-radius: 0.3em;
    padding: 0.3em;
}
</style>
<style>
/* Slider */
.slick-slider {
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list {
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}

.slick-list:focus {
    outline: none;
}

.slick-list.dragging {
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.slick-track {
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}

.slick-track:before,
.slick-track:after {
    display: table;

    content: '';
}

.slick-track:after {
    clear: both;
}

.slick-loading .slick-track {
    visibility: hidden;
}

.slick-slide {
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}

[dir='rtl'] .slick-slide {
    float: right;
}

.slick-slide img {
    display: block;
}

.slick-slide.slick-loading img {
    display: none;
}

.slick-slide.dragging img {
    pointer-events: none;
}

.slick-initialized .slick-slide {
    display: block;
}

.slick-loading .slick-slide {
    visibility: hidden;
}

.slick-vertical .slick-slide {
    display: block;

    height: auto;

    border: 1px solid transparent;
}

.slick-arrow.slick-hidden {
    display: none;
}

.swal-title {
    margin: 0px;
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.21);
    margin-bottom: 28px;
    color: White;
}

.swal-text {
    padding: 17px;
    display: block;
    margin: 22px;
    text-align: center;
    color: White;
}

.swal-modal {
    background-color: rgba(255, 74, 33);
    border: 3px solid white;
}

.swal-button {
    background-color: #f8f9fa;
    color: #000;
    border: none;
    box-shadow: none;
    border-radius: 5px;
    font-weight: 600;
    font-size: 14px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
}
</style>
</body>

</html>