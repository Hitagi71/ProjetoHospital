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
                        <h3>Cadastro de Funcionário</h3>
                        <p>Preencha suas Informações</p>
                        <div class="f1-steps">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="2" style="width: 16.66%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon">1</div>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon">2</div>
                            </div>
                        </div>

                        <fieldset>
                            <h4>Insira as informações do Funcionário:</h4>
                            <div class="form-group">
                                <input type="text" id="txtNome" name="txtNome" class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" id="txtSenha" name="txtSenha" class="form-control" placeholder="Senha" data-mask-reverse="true" />
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-next">Próximo</button>
                            </div>
                        </fieldset>
                        <fieldset>
                            <h4>Digite as Especificações do Funcionário:</h4>
                            <div class="form-group">
                                <input type="text" id="txtCargaHoraria" name="txtCargaHoraria" class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtCargo" name="txtCargo" class="form-control"  placeholder="Cargo" >
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtDescricao" name="txtDescricao" class="form-control"  placeholder="Descrição" >
                            </div>
                            <div class="form-group">
                                <input type="number" id="txtSalario" name="txtSalario" class="form-control" placeholder="Salário" min="0.00" max="10000.00" step="0.01"/>
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
                    <img id="adminFoto" src="imgs/doutor.jpg" class="rounded-circle" alt="FotoAdmin" />
                    <h1><b>Dr.Alan</b></h1>
                </div>
                <div id="listas">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li>
                        <li class="list-group-item">
                            <i class="material-icons size1">home</i>
                            <a class="links" href="home.php" target="_self">
                                <h1 class="nomesLista">
                                    <b>Home</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">person_add</i>
                            <a class="links" href="pacientes.php" target="_self">
                                <h1 class="nomesLista">
                                    <b>Pacientes</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">assignment_ind</i>
                            <a class="links" href="funcionario.php" target="_self">
                                <h1 class="nomesLista">
                                    <b>Funcionários</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">healing</i>
                            <a class="links" href="medicamento.php" target="_self">
                                <h1 class="nomesLista">
                                    <b>Medicamentos</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">assignment</i>
                            <a class="links" href="agendamento.php" target="_self">
                                <h1 class="nomesLista">
                                    <b>Agendamentos</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">local_hospital</i>
                            <a class="links" href="equipamento.php" target="_self">
                                <h1 class="nomesLista">
                                    <b>Auxiliares</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">weekend</i>
                            <a class="links" href="sala.php" target="_self">
                                <h1 class="nomesLista">
                                    <b>Sala</b>
                                </h1>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <i class="material-icons size1">card_travel</i>
                            <a class="links" href="equipamento.php" target="_self">
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
                <h2 class="mt-5"><i class="material-icons size cursor" data-toggle="modal" data-target="#exampleModal">add_circle</i>&nbsp;&nbsp;&nbsp;Funcionários:</h2>
                <div class="row row-cols-1 row-cols-md-4">
                    <div class="col mb-3">
                        <div class="card text-center">
                            <img src="imgs/doutor 1.jpg" class="card-img-top imgSize">
                            <div class="card-body">
                                <h5 class="card-title">Paula Nogueira</h5>
                                <p class="card-text"><i class="material-icons">create</i>&nbsp;&nbsp;&nbsp;<i class="material-icons">delete</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card text-center">
                            <img src="imgs/doutor 2.jpg" class="card-img-top imgSize">
                            <div class="card-body">
                                <h5 class="card-title">Julia Nakamura</h5>
                                <p class="card-text"><i class="material-icons">create</i>&nbsp;&nbsp;&nbsp;<i class="material-icons">delete</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card text-center">
                            <img src="imgs/doutor 3.jpg" class="card-img-top imgSize">
                            <div class="card-body">
                                <h5 class="card-title">Tulio Dias</h5>
                                <p class="card-text"><i class="material-icons">create</i>&nbsp;&nbsp;&nbsp;<i class="material-icons">delete</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center text-white">
            <div class="mt-3">
                &copy;Todos Direitos Reservados
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

            
            $("#txtCep").keyup("input",function(){
                $.ajax({
                    url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
                    dataType: 'json',
                    success: function(resposta){
                        $("#txtLogradouro").val(resposta.logradouro);
                        $("#txtComplemento").val(resposta.complemento);
                        $("#txtBairro").val(resposta.bairro);
                        $("#txtCidade").val(resposta.localidade);
                        $("#txtUF").val(resposta.uf);
                    }
                });
            });
        </script>

<?php
    include('conexao.php');

    if(isset($_POST['cadastrar']))
    {
        $nome=ucwords(strtolower(trim($_POST['txtNome'])));
        $rg=$_POST['txtRG'];
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

        $sql_verificar=('select * from pessoa where pessoa_rg="'.$rg.'" or pessoa_cpf="'.$cpf.'";');

        $verificar=mysqli_query($conexao,$sql_verificar);

        $quant_registros=mysqli_num_rows($verificar);


        if($quant_registros>=1)
        {

            echo('<script> window.alert("Email e/ou CPF já cadastrado(s) "); 
                window.location="pacientes.php"; </script>');

        }else{

            $sql_inserir=('
            insert into pessoa ( 
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
            "'.$niver.'");');     

            mysqli_query($conexao,$sql_inserir);
            
            $id=mysqli_insert_id($conexao);

            $sql_inserir2=('
            insert into ENDERECO ( 
            endereco_rua,
            endereco_numero,
            endereco_bairro,
            endereco_complemento,
            endereco_cep,
            esdereco_estado,
            endereco_cidade,
            endereco_pessoa
            ) values (
            "'.$logradouro.'",
            "'.$numero.'",
            "'.$bairro.'",
            "'.$complemento.'",
            "'.$cep.'",
            "'.$estado.'",
            "'.$cidade.'",
            "'.$id.'");');     

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
    }
?>
</body>
</html>