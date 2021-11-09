<!--Recebendo e armazenado os dados do formulario de Denuncia -->
<?php
if (isset($_POST['submit'])) {
    /*
   print_r('Nome: ' . $_POST['nome']);
   print_r('<br>');
   print_r('Email: ' . $_POST['email']);
   print_r('<br>');
   print_r('Local: ' . $_POST['Local']);
   print_r('<br>');
   print_r('Telefone: ' . $_POST['telefone']);
   print_r('<br>');
   print_r('Data: ' . $_POST['data_ocorrido']);
   print_r('<br>');
   print_r('city: ' . $_POST['cidade']);
   print_r('<br>');
   print_r('Estado: ' . $_POST['estado']);
   print_r('<br>');
   print_r('Realato: ' . $_POST['relato']);
    */

    include_once('../A-ConexãoBD/config.php');
    $Anonimo = $_POST['Escolha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $Local = $_POST['Local'];
    $telefone = $_POST['telefone'];
    $data_ocrd = $_POST['data_ocorrido'];
    $categoria = $_POST['select'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $Periodo = $_POST['Periodo'];
    $relato = $_POST['relato'];


    $result = mysqli_query($conexao, "INSERT INTO formdenuc (Anonimo,nome,email, Local ,telefone,data_ocorrido,categoria,cidade,estado,Periodo,relato) 
        VALUES ('$Anonimo ','$nome','$email','$Local','$telefone','$data_ocrd','$categoria','$cidade','$estado','$Periodo','$relato')");
}
?>
<!--Criando o formulario de Denuncia -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/gif" href="./img/icons8-pilha-de-documentos.gif">
    <title>Formulário | Denuncia</title>

    <!--Criando o Alert de confirmaçao ou não de envio de denuncia -->
    <script type="text/javascript">
    function redirecionar() {
        Swal.fire({
            title: 'Deseja Cancelar essa Denuncia?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Sim',
            denyButtonText: `Não`,
        }).then((result) => {
            /* Confirmando a Denuncia  */
            if (result.isConfirmed) {
                Swal.fire('Denuncia Cancelar!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire(' Revise a denuncia e aperte o Botão "Enviar" ', '', 'info')


            }
        })
    }
    </script>

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
        transform: translate(-50%, -35%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        width: 30%;

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
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        width: 40%;
    }

    #submit:hover {
        background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
    }

    #button {
        background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        width: 40%;
    }

    a {
        color: blanchedalmond;
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
</head>

<body>

    </div>
    <div class="box">
        <!--Criando o formulario-->
        <form method="POST">
            <fieldset>
                <legend><b>Fórmulário de Denuncia</b></legend>
                <br>
                <!--Criando o local anonimo(S/N)-->
                <label class="form-label form-label-top" id="label_14" for="input_14">
                    Você gostaria de fazer uma <b>Denuncia Anônima</b>?
                    <br> <br>
                </label>
                <div id="cid_14" class="form-input-wide jf-required">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_14"
                        data-component="checkbox">
                        <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <div class="inputBox">
                                <input type="radio" aria-describedby="label_14" class="form-checkbox validate[required]"
                                    id="Escolha" name="Escolha" value="Sim" required="" />
                                <label id="label_input_14_0" for="input_14_0"> Sim </label>
                        </span>
                        <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="radio" aria-describedby="label_14" class="" id="Escolha" name="Escolha"
                                value="Não" required="" />
                            <label id="label_input_14_1" for="input_14_1"> Não </label>
                    </div>
                    </span>
                </div>
    </div>
    <br>
    <!--Criando o local nome-->
    <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser" required>
        <label for="nome" class="labelInput">Nome completo</label>
    </div>
    <br><br>
    <!--Criando o local Email-->
    <div class="inputBox">
        <input type="email" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelInput">Email</label>
    </div>
    <br><br>
    <!--Criando o local Ocorido-->
    <div class="inputBox">
        <input type="text" name="Local" id="Local" class="inputUser" required>
        <label for="Local" class="labelInput">Local do ocorrido</label>
    </div>
    <br><br>
    <!--Criando o local telefone-->
    <div class="inputBox">
        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
        <label for="telefone" class="labelInput">Telefone</label>
    </div>
    <!--Criando o local Periodo-->
    <p>Qual o Periodo do dia:</p>
    <div class="inputBox">
        <input type="radio" id="Manhã" name="Periodo" value="Manhã" required>
        <label for="Manhã">Manhã</label>
        <br>
        <input type="radio" id="Tarde" name="Periodo" value="Tarde" required>
        <label for="Tarde">Tarde</label>
        <br>
        <input type="radio" id="Noite" name="Periodo" value="Noite" required>
        <label for="Noite">Noite</label>
    </div>
    <br><br>
    <!--Criando o local Data-->
    <label for="data_ocorrido"><b>Data do ocorrido:</b></label>
    <input type="date" name="data_ocorrido" id="data_ocorrido" required>
    <br><br>
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
    <br>
    <!--Criaado o local Pais-->
    <div class="inputBox">
        <br>
        <select name="select" required>
            <span class="inputBox" style="vertical-align:top">
                <option value="vazia" selected></option>
                <option value="Brazil"> Brazil </option>
                <option value="United States"> Estados Unidos </option>
                <option value="Afghanistan"> Afghanistan </option>
                <option value="Albania"> Albania </option>
                <option value="Algeria"> Algeria </option>
                <option value="American Samoa"> American Samoa </option>
                <option value="Andorra"> Andorra </option>
                <option value="Angola"> Angola </option>
                <option value="Anguilla"> Anguilla </option>
                <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                <option value="Argentina"> Argentina </option>
                <option value="Armenia"> Armenia </option>
                <option value="Aruba"> Aruba </option>
                <option value="Australia"> Australia </option>
                <option value="Austria"> Austria </option>
                <option value="Azerbaijan"> Azerbaijan </option>
                <option value="The Bahamas"> The Bahamas </option>
                <option value="Bahrain"> Bahrain </option>
                <option value="Bangladesh"> Bangladesh </option>
                <option value="Barbados"> Barbados </option>
                <option value="Belarus"> Belarus </option>
                <option value="Belgium"> Belgium </option>
                <option value="Belize"> Belize </option>
                <option value="Benin"> Benin </option>
                <option value="Bermuda"> Bermuda </option>
                <option value="Bhutan"> Bhutan </option>
                <option value="Bolivia"> Bolivia </option>
                <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                <option value="Botswana"> Botswana </option>
                <option value="Brunei"> Brunei </option>
                <option value="Bulgaria"> Bulgaria </option>
                <option value="Burkina Faso"> Burkina Faso </option>
                <option value="Burundi"> Burundi </option>
                <option value="Cambodia"> Cambodia </option>
                <option value="Cameroon"> Cameroon </option>
                <option value="Canada"> Canada </option>
                <option value="Cape Verde"> Cape Verde </option>
                <option value="Cayman Islands"> Cayman Islands </option>
                <option value="Central African Republic"> Central African Republic </option>
                <option value="Chad"> Chad </option>
                <option value="Chile"> Chile </option>
                <option value="China"> China </option>
                <option value="Christmas Island"> Christmas Island </option>
                <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                <option value="Colombia"> Colombia </option>
                <option value="Comoros"> Comoros </option>
                <option value="Congo"> Congo </option>
                <option value="Cook Islands"> Cook Islands </option>
                <option value="Costa Rica"> Costa Rica </option>
                <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                <option value="Croatia"> Croatia </option>
                <option value="Cuba"> Cuba </option>
                <option value="Curacao"> Curacao </option>
                <option value="Cyprus"> Cyprus </option>
                <option value="Czech Republic"> Czech Republic </option>
                <option value="Democratic Republic of the Congo"> Democratic Republic of the
                    Congo </option>
                <option value="Denmark"> Denmark </option>
                <option value="Djibouti"> Djibouti </option>
                <option value="Dominica"> Dominica </option>
                <option value="Dominican Republic"> Dominican Republic </option>
                <option value="Ecuador"> Ecuador </option>
                <option value="Egypt"> Egypt </option>
                <option value="El Salvador"> El Salvador </option>
                <option value="Equatorial Guinea"> Equatorial Guinea </option>
                <option value="Eritrea"> Eritrea </option>
                <option value="Estonia"> Estonia </option>
                <option value="Ethiopia"> Ethiopia </option>
                <option value="Falkland Islands"> Falkland Islands </option>
                <option value="Faroe Islands"> Faroe Islands </option>
                <option value="Fiji"> Fiji </option>
                <option value="Finland"> Finland </option>
                <option value="France"> France </option>
                <option value="French Polynesia"> French Polynesia </option>
                <option value="Gabon"> Gabon </option>
                <option value="The Gambia"> The Gambia </option>
                <option value="Georgia"> Georgia </option>
                <option value="Germany"> Germany </option>
                <option value="Ghana"> Ghana </option>
                <option value="Gibraltar"> Gibraltar </option>
                <option value="Greece"> Greece </option>
                <option value="Greenland"> Greenland </option>
                <option value="Grenada"> Grenada </option>
                <option value="Guadeloupe"> Guadeloupe </option>
                <option value="Guam"> Guam </option>
                <option value="Guatemala"> Guatemala </option>
                <option value="Guernsey"> Guernsey </option>
                <option value="Guinea"> Guinea </option>
                <option value="Guinea-Bissau"> Guinea-Bissau </option>
                <option value="Guyana"> Guyana </option>
                <option value="Haiti"> Haiti </option>
                <option value="Honduras"> Honduras </option>
                <option value="Hong Kong"> Hong Kong </option>
                <option value="Hungary"> Hungary </option>
                <option value="Iceland"> Iceland </option>
                <option value="India"> India </option>
                <option value="Indonesia"> Indonesia </option>
                <option value="Iran"> Iran </option>
                <option value="Iraq"> Iraq </option>
                <option value="Ireland"> Ireland </option>
                <option value="Israel"> Israel </option>
                <option value="Italy"> Italy </option>
                <option value="Jamaica"> Jamaica </option>
                <option value="Japan"> Japan </option>
                <option value="Jersey"> Jersey </option>
                <option value="Jordan"> Jordan </option>
                <option value="Kazakhstan"> Kazakhstan </option>
                <option value="Kenya"> Kenya </option>
                <option value="Kiribati"> Kiribati </option>
                <option value="North Korea"> North Korea </option>
                <option value="South Korea"> South Korea </option>
                <option value="Kosovo"> Kosovo </option>
                <option value="Kuwait"> Kuwait </option>
                <option value="Kyrgyzstan"> Kyrgyzstan </option>
                <option value="Laos"> Laos </option>
                <option value="Latvia"> Latvia </option>
                <option value="Lebanon"> Lebanon </option>
                <option value="Lesotho"> Lesotho </option>
                <option value="Liberia"> Liberia </option>
                <option value="Libya"> Libya </option>
                <option value="Liechtenstein"> Liechtenstein </option>
                <option value="Lithuania"> Lithuania </option>
                <option value="Luxembourg"> Luxembourg </option>
                <option value="Macau"> Macau </option>
                <option value="Macedonia"> Macedonia </option>
                <option value="Madagascar"> Madagascar </option>
                <option value="Malawi"> Malawi </option>
                <option value="Malaysia"> Malaysia </option>
                <option value="Maldives"> Maldives </option>
                <option value="Mali"> Mali </option>
                <option value="Malta"> Malta </option>
                <option value="Marshall Islands"> Marshall Islands </option>
                <option value="Martinique"> Martinique </option>
                <option value="Mauritania"> Mauritania </option>
                <option value="Mauritius"> Mauritius </option>
                <option value="Mayotte"> Mayotte </option>
                <option value="Mexico"> Mexico </option>
                <option value="Micronesia"> Micronesia </option>
                <option value="Moldova"> Moldova </option>
                <option value="Monaco"> Monaco </option>
                <option value="Mongolia"> Mongolia </option>
                <option value="Montenegro"> Montenegro </option>
                <option value="Montserrat"> Montserrat </option>
                <option value="Morocco"> Morocco </option>
                <option value="Mozambique"> Mozambique </option>
                <option value="Myanmar"> Myanmar </option>
                <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                <option value="Namibia"> Namibia </option>
                <option value="Nauru"> Nauru </option>
                <option value="Nepal"> Nepal </option>
                <option value="Netherlands"> Netherlands </option>
                <option value="Netherlands Antilles"> Netherlands Antilles </option>
                <option value="New Caledonia"> New Caledonia </option>
                <option value="New Zealand"> New Zealand </option>
                <option value="Nicaragua"> Nicaragua </option>
                <option value="Niger"> Niger </option>
                <option value="Nigeria"> Nigeria </option>
                <option value="Niue"> Niue </option>
                <option value="Norfolk Island"> Norfolk Island </option>
                <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of
                    Northern Cyprus </option>
                <option value="Northern Mariana"> Northern Mariana </option>
                <option value="Norway"> Norway </option>
                <option value="Oman"> Oman </option>
                <option value="Pakistan"> Pakistan </option>
                <option value="Palau"> Palau </option>
                <option value="Palestine"> Palestine </option>
                <option value="Panama"> Panama </option>
                <option value="Papua New Guinea"> Papua New Guinea </option>
                <option value="Paraguay"> Paraguay </option>
                <option value="Peru"> Peru </option>
                <option value="Philippines"> Philippines </option>
                <option value="Pitcairn Islands"> Pitcairn Islands </option>
                <option value="Poland"> Poland </option>
                <option value="Portugal"> Portugal </option>
                <option value="Puerto Rico"> Puerto Rico </option>
                <option value="Qatar"> Qatar </option>
                <option value="Republic of the Congo"> Republic of the Congo </option>
                <option value="Romania"> Romania </option>
                <option value="Russia"> Russia </option>
                <option value="Rwanda"> Rwanda </option>
                <option value="Saint Barthelemy"> Saint Barthelemy </option>
                <option value="Saint Helena"> Saint Helena </option>
                <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                <option value="Saint Lucia"> Saint Lucia </option>
                <option value="Saint Martin"> Saint Martin </option>
                <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon
                </option>
                <option value="Saint Vincent and the Grenadines"> Saint Vincent and the
                    Grenadines </option>
                <option value="Samoa"> Samoa </option>
                <option value="San Marino"> San Marino </option>
                <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                <option value="Saudi Arabia"> Saudi Arabia </option>
                <option value="Senegal"> Senegal </option>
                <option value="Serbia"> Serbia </option>
                <option value="Seychelles"> Seychelles </option>
                <option value="Sierra Leone"> Sierra Leone </option>
                <option value="Singapore"> Singapore </option>
                <option value="Slovakia"> Slovakia </option>
                <option value="Slovenia"> Slovenia </option>
                <option value="Solomon Islands"> Solomon Islands </option>
                <option value="Somalia"> Somalia </option>
                <option value="Somaliland"> Somaliland </option>
                <option value="South Africa"> South Africa </option>
                <option value="South Ossetia"> South Ossetia </option>
                <option value="South Sudan"> South Sudan </option>
                <option value="Spain"> Spain </option>
                <option value="Sri Lanka"> Sri Lanka </option>
                <option value="Sudan"> Sudan </option>
                <option value="Suriname"> Suriname </option>
                <option value="Svalbard"> Svalbard </option>
                <option value="eSwatini"> eSwatini </option>
                <option value="Sweden"> Sweden </option>
                <option value="Switzerland"> Switzerland </option>
                <option value="Syria"> Syria </option>
                <option value="Taiwan"> Taiwan </option>
                <option value="Tajikistan"> Tajikistan </option>
                <option value="Tanzania"> Tanzania </option>
                <option value="Thailand"> Thailand </option>
                <option value="Timor-Leste"> Timor-Leste </option>
                <option value="Togo"> Togo </option>
                <option value="Tokelau"> Tokelau </option>
                <option value="Tonga"> Tonga </option>
                <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie
                </option>
                <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                <option value="Tristan da Cunha"> Tristan da Cunha </option>
                <option value="Tunisia"> Tunisia </option>
                <option value="Turkey"> Turkey </option>
                <option value="Turkmenistan"> Turkmenistan </option>
                <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                <option value="Tuvalu"> Tuvalu </option>
                <option value="Uganda"> Uganda </option>
                <option value="Ukraine"> Ukraine </option>
                <option value="United Arab Emirates"> United Arab Emirates </option>
                <option value="United Kingdom"> United Kingdom </option>
                <option value="Uruguay"> Uruguay </option>
                <option value="Uzbekistan"> Uzbekistan </option>
                <option value="Vanuatu"> Vanuatu </option>
                <option value="Vatican City"> Vatican City </option>
                <option value="Venezuela"> Venezuela </option>
                <option value="Vietnam"> Vietnam </option>
                <option value="British Virgin Islands"> British Virgin Islands </option>
                <option value="Isle of Man"> Isle of Man </option>
                <option value="US Virgin Islands"> US Virgin Islands </option>
                <option value="Wallis and Futuna"> Wallis and Futuna </option>
                <option value="Western Sahara"> Western Sahara </option>
                <option value="Yemen"> Yemen </option>
                <option value="Zambia"> Zambia </option>
                <option value="Zimbabwe"> Zimbabwe </option>
                <option value="other"> Outros </option>

        </select>
        <label for="categoria" class="labelInput" required>Selecione o País </label>
    </div>
    <br>
    <!--Criando o local Imagem-->
    <label class="form-label form-label-top" id="label_13" for="input_13">
        <strong>Insira imagens caso tenha</strong>
        <p>Tamanho máximo de cada documento: 1GB </p>
        <div class="row">
            <div class="col">
                <div class="form-group"><label for="denuncia_doc1File"></label>
                    <div class="custom-file"><input type="file" id="denuncia_doc1File" name="denuncia[doc1File]"
                            class="custom-file-input" /><label for="denuncia_doc1File"
                            class="custom-file-label"></label>
                    </div>
                    <br>
                    <div class="col">
                        <div class="form-group"><label for="denuncia_doc1File"></label>
                            <div class="custom-file"><input type="file" id="denuncia_doc1File" name="denuncia[doc1File]"
                                    class="custom-file-input" /><label for="denuncia_doc1File"
                                    class="custom-file-label"></label>
                            </div>
                        </div>
                        <br><br><br>
                        <!--Criando o local Relato-->
                        <div class="inputBox">
                            <input type="text" name="relato" id="relato" class="inputUser" required>
                            <label for="relato" class="labelInput">Relate brevemente o ocorrido</label>
                        </div>
                        <br><br>
                        <center>
                            <!--Criando o Botão Enviar-->
                            <input type="submit" name="submit" id="submit">

                            <!--Criando o Botão Cancelar-->
                            <button input type="button" name="button" id="button"
                                onclick="redirecionar();  return true"><b>Cancelar</b></button>
                        </center>

                        </fieldset>
                        <!--Criando o botão sair-->
                        <center><a href="../sistema.php">
                                <h3>Sair do formulario de denuncia!</h3>
                            </a>
                        </center>

                        </form>
                    </div>
                    <!--importando js-->
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>