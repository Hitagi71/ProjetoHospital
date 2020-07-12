<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body>

    <!--modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form role="form" action="#" method="POST" class="f1">
                        <h3>Cadastro de Paciente</h3>
                        <p>Preencha suas informações</p>
                        <div class="f1-steps">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon">1</div>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon">2</div>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon">3</div>
                            </div>
                        </div>

                        <fieldset>
                            <h4>Insira as informações do paciente:</h4>
                            <div class="form-group">
                                <input type="text" id="txtNome" name="txtNome" class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtRG" name="txtRG" class="form-control" placeholder="RG" data-mask="00000-000" >
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtCpf" name="txtCpf" class="form-control" placeholder="CPF" data-mask="000.000.000-00" data-mask-reverse="true" />
                            </div>
                            <div class="form-group">
                                Sexo:
                                <div class="form-check">
                                    <input id="txtSexo" name="txtSexo" class="form-check-input" type="radio"  value="Masculino" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                     Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="txtSexo" name="txtSexo" class="form-check-input" type="radio"  value="Feminino">
                                    <label class="form-check-label" for="exampleRadios2">
                                     Feminino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="txtSexo" name="txtSexo" class="form-check-input" type="radio"  value="Androgeno">
                                    <label class="form-check-label" for="exampleRadios2">
                                     Andrógeno
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-about-yourself">Data de nascimento</label>
                                <input type="date" id="txtNiver" name="txtNiver" class="form-control" placeholder="About yourself..." />
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-next">Próximo</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h4>Insira o endereço do paciente:</h4>
                            <div class="form-group">
                                <input type="text" id="txtCep" name="txtCep" class="form-control" placeholder="CEP" data-mask="00000-000" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtLogradoro" name="txtLogradouro" class="form-control" placeholder="Rua">
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtNum" name="txtNum" class="form-control" placeholder="Numero">
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtBairro" name="txtBairro" class="form-control" placeholder="Bairro"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtComplemento" name="txtComplemento" class="form-control" placeholder="Complemento"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtUF" name="txtUF" class="form-control" placeholder="Estado"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtCidade" name="txtCidade" class="form-control" placeholder="Cidade"/>
                            </div>
                            
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Próximo</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h4>Digite o plano de saude do paciene:</h4>
                            <div class="form-group">
                                <input type="text" id="txtPlano" name="txtPlano" class="form-control" placeholder="Plano de saude" />
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="submit" class="btn btn-submit" name="cadastrar">Cadastrar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex toggled" id="wrapper">
        <div class="border-right toggle" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <div id="nomeAdmin">
                    <img id="adminFoto" src="imgs/homura.jpg" class="rounded-circle" alt="FotoAdmin" />
                    <h1><b>Homura</b></h1>
                </div>
                <div id="listas">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li>
                        <li class="list-group-item">
                            <i class="material-icons size1">person_add</i>
                            <a class="links" href="pacientes.html" target="_self">
                                <h1 class="nomesLista">
                                    <b>Cadastros</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">healing</i>
                            <a class="links" href="medicamento.html" target="_self">
                                <h1 class="nomesLista">
                                    <b>Medicamentos</b>
                                </h1>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <i class="material-icons size1">assignment</i>
                            <a class="links" href="agendamento.html" target="_self">
                                <h1 class="nomesLista">
                                    <b>Agendamentos</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">card_travel</i>
                            <a class="links" href="equipamento.html" target="_self">
                                <h1 class="nomesLista">
                                    <b>Equipamentos</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="border-bottom">
                <div class="menu">
                    <button class="btn btn-primary mb-4" id="menu-toggle">
                        <i class="material-icons">menu</i>
                    </button>
                </div>
                <ul>
                    <li>
                        <a href="#"><i class="material-icons size">chat_bubble_outline</i></a>
                    </li>
                     <li>
                        <a href="#"><i class="material-icons size">notifications_none</i></a>
                        <span class="badge">3</span>
                    </li>
                </ul>
                <div class="search">
                    <form>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Procurar"/>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons">search</i>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>  
            <div class="container">
                <h2 class="mt-5"><i class="material-icons size cursor" data-toggle="modal" data-target="#exampleModal">add_circle</i>&nbsp;&nbsp;&nbsp;Pacientes:</h2>
                <div class="row row-cols-1 row-cols-md-4">
                    <div class="col mb-3">
                        <div class="card text-center">
                            <img src="imgs/nutty.jpg" class="card-img-top imgSize">
                            <div class="card-body">
                                <h5 class="card-title">Nuttylee</h5>
                                <p class="card-text"><i class="material-icons">create</i>&nbsp;&nbsp;&nbsp;<i class="material-icons">delete</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card text-center">
                            <img src="imgs/dede.jpg" class="card-img-top imgSize">
                            <div class="card-body">
                                <h5 class="card-title">Dedé</h5>
                                <p class="card-text"><i class="material-icons">create</i>&nbsp;&nbsp;&nbsp;<i class="material-icons">delete</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card text-center">
                            <img src="imgs/vinao.JPG" class="card-img-top imgSize">
                            <div class="card-body">
                                <h5 class="card-title">Vini</h5>
                                <p class="card-text"><i class="material-icons">create</i>&nbsp;&nbsp;&nbsp;<i class="material-icons">delete</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card text-center">
                            <img src="imgs/ruan.jpg" class="card-img-top imgSize">
                            <div class="card-body">
                                <h5 class="card-title">Ruanzoka</h5>
                                <p class="card-text"><i class="material-icons">create</i>&nbsp;&nbsp;&nbsp;<i class="material-icons">delete</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center text-white">
            <div class="mt-3">
                &copy;Todos Direitos reservados
            </div>
        </footer>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.mask.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/bootstrap-notify.min.js" type="text/javascript"></script>
        <script type="text/javascript" language="javascript">
            (function() {
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                                messageBox('danger', 'Preencha todos os campos')
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();

            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            function messageBox(type, message) {
                $.notify({
                    message: message
                }, {
                    type: type,
                    placement: {
                        from: "top",
                        align: "center"
                    },
                });
            }

            $("#cep").change(function(){
                $.ajax({
                    url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
                    dataType: 'json',
                    success: function(resposta){
                        $("#logradouro").val(resposta.logradouro);
                        $("#complemento").val(resposta.complemento);
                        $("#bairro").val(resposta.bairro);
                        $("#cidade").val(resposta.localidade);
                        $("#uf").val(resposta.uf);
                        $("#numero").focus();
                    }
                });
            });
        </script>

<?php
    include('conexao.php');

    if(isset($_POST['cadastrar']))
    {
        $nome=ucwords(strtolower(trim($_POST['txtNome'])));
        $rg=$_POST['txtRg'];
        $cpf=$_POST['txtCpf'];
        $sexo=$_POST['txtSexo'];
        $niver=$_POST['txtNiver'];
        $cep=trim($_POST['txtCep']);
        $logradouro=ucwords(strtolower($_POST['txtLogradouro']));
        $numero=$_POST['txtNum'];
        $bairro=$_POST['txtBairro'];
        $complemento=$_POST['txtComplemento'];
        $estado=$_POST['txtUF'];
        $cidade=$_POST['txtCidade'];
        $plano_saude=$_POST['txtPlano'];

        if(!empty($nome) && !empty($rg) && !empty($cpf) && !empty($sexo) && !empty($niver) && !empty($cep) 
        && !empty($logradouro) && !empty($numero)&& !empty($bairro) && !empty($complemento) && !empty($estado) 
        && !empty($cidade) && !empty($plano) )
		{
            $sql_verificar=('select * from PESSOA where pessoa_rg="'.$rg.'" or pessoa_cpf="'.$cpf.'";');

            $verificar=mysqli_query($conexao,$sql_verificar);

            $quant_registros=mysqli_num_rows($verificar);


            if($quant_registros>=1)
            {

                echo('<script> window.alert("Email e/ou CPF já cadastrado(s) "); 
                    window.location="pacientes.php"; </script>');

            }else{

                $sql_inserir=('
                insert into PESSOA ( 
                pessoa_nome,
                pessoa_rg,
                pessoa_cpf,
                pessoa_sexo,
                pessoa_data_nasc

                ) values (
                "'.$nome.'",
                "'.$rg.'",
                "'.$cpf.'",
                "'.$sexo.'",
                "'.$nascimento.'");');     

                mysqli_query($conexao,$sql_inserir);
                
                $sql_inserir2=('
                insert into ENDERECO ( 
                endereco_rua,
                endereco_numero,
                endereco_bairro,
                endereco_complemento,
                endereco_cep,
                esdereco_estado,
                endereco_cidade

                ) values (
                "'.$logradouro.'",
                "'.$numero.'",
                "'.$bairro.'",
                "'.$complemento.'",
                "'.$cep.'",
                "'.$estado.'",
                "'.$cidade.'");');     

                mysqli_query($conexao,$sql_inserir2);

                $sql_inserir3=('
                insert into PLANO_SAUDE ( 
                plano_saude_nome
                ) values (
                "'.$plano_saude.'");');     

                mysqli_query($conexao,$sql_inserir3);

                echo('<script> window.alert("Cadastrado com sucesso"); 
                        window.location="login.php"; </script>');
            }
        }else{

            echo('<script> window.alert("Preencha todos os campos");
                    window.location="pacientes.php"; </script>');
        }
    }
?>

</body>
</html>