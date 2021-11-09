   <!--Criando a pagina Home-->
   <!DOCTYPE html>
   <html lang="pt-br">

   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
           integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
           integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
       </script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
           integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
       </script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
           integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
       </script>
       <link rel="shortcut icon" type="imagex/png" href="./img/favicon-16x16.png">
       <title> Hoje Não! </title>

       <!--Estilizando a pagina-->
       <style>
       body {
           font-family: Arial, Helvetica, sans-serif;
           background: linear-gradient(to right, rgb(2, 228, 220), rgb(232, 49, 204));
           text-align: center;
           color: white;
       }

       .box {
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
           background-color: rgba(0, 0, 0, 0.6);
           padding: 90px;
           border-radius: 35px;

       }

       a {
           text-decoration: none;
           color: white;
           border: 4px solid dodgerblue;
           border-radius: 25px;
           padding: 30px;
       }

       a:hover {
           background-color: dodgerblue;
       }

       ul {
           list-style: none;
           padding: 0;
           overflow: hidden;
           transition: all .5s;
       }

       nav {
           background-color: #0000008a;
           padding: 0 20px;
           justify-content: space-between;
           align-items: center;
       }

       h1,
       p {
           color: #FFF;
       }

       p {
           margin-top: 30px;
           margin-bottom: 1rem;
       }

       nav,
       ul {

           flex-direction: row;
       }

       li {
           padding: 0 20px;
       }

       h1 {
           margin: 0;
           padding: 25px;
       }

       button {
           background-color: transparent;
           border: none;
           color: #FFF;
           font-size: 36px;
           position: absolute;
           right: 10px;
           top: 10px;
           display: none;
       }

       button:focus~ul {
           height: 260px;
       }
       </style>
   </head>

   <body>
       <!--Criando o Nav da pagina-->
       <nav>

           <div class="logo">
               <center>
                   <h1>Sistema Hoje Não!</h1>
               </center>
           </div>

       </nav>
       <br>
       <div class="box">
           <!--Criando o Botão login-->
           <a href="./F-Login_e_Test/login.php">Login</a>
           <!--Criando o Botão Cadrastro-->
           <a href="./formulario.php">Cadastre-se</a>
       </div>


   </body>

   </html>