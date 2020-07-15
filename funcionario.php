<!DOCTYPE html>
<html>

<head>
    <title>Funcionario</title>
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
                           
                        </fieldset>
                        <fieldset>
                            <h4>Digite as Especificações do Funcionário:</h4>
                            
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
                            <a class="links" href="cadastroAux.php" target="_self">
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
                <div class="row">
                    <div class="col-12">
                        <h1 class="mt-5">Cadastro de Funcionario</h1>
                        <form>   
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-4">
                                        <label>Nome:</label>
                                        <input type="text" id="txtNome" name="txtNome" class="form-control" placeholder="Nome">  
                                    </div>
                                    <div class="col-4">
                                        <label>Email:</label>
                                        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email">      
                                    </div>  
                                    <div class="col-4">
                                        <label>Senha:</label>  
                                        <input type="password" id="txtSenha" name="txtSenha" class="form-control" placeholder="Senha" data-mask-reverse="true" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                <div class="col-5">
                                        <label>Cargo:</label>
                                        <input type="text" id="txtCargo" name="txtCargo" class="form-control"  placeholder="Cargo" >
                                    </div> 
                                    <div class="col-2">
                                        <label>Carga Horaria:</label>
                                        <input type="time" id="txtCargaHoraria" name="txtCargaHoraria" class="form-control">
                                    </div>
                                    
                                    <div class="col-2">
                                        <label>Salario:</label>
                                        <input type="number" id="txtSalario" name="txtSalario" class="form-control" placeholder="Salário" min="0.00" max="10000.00" step="0.01"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cadastrar"  name="cadastrar" class="btn btn-primary btn-lg btn-block"/>
                            </div>
                        </form>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col">Salario</th>
                                    <th scope="col">Carga Horaria</th>
                                    <th scope="col">Alterar</th>  
                                    <th scope="col">Deletar</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    /*include('conexao.php');

                                    $exibir=('select * from pessoa');	
                                    $result=mysqli_query($conexao,$exibir);

                                    while($con=mysqli_fetch_array($result)){
                                        echo('<tbody
                                                <tr>
                                                    <th scope="row">'.$con['pessoa_id'].'</th>');
                                                        echo('<td>'.$con['pessoa_nome'].'</td>');
                                                        echo('<td>'.$con['pessoa_rg'].'</td>');
                                                        echo('<td>'.$con['pessoa_cpf'].'</td>');
                                                        echo('<td>'.$con['pessoa_sexo'].'</td>');
                                                         echo('<td>'.date("d/m/Y",strtotime($con['pessoa_data_nasc'])).'</td>');
                                                         echo('<td>
                                                                <span class="table-edit"><a href="pacientes.php?id='.$con['pessoa_id'].'"><button type="button" class="btn btn-info btn-rounded btn-sm my-0"">Editar</button></a></span>
                                                                </td>');
                                                        echo('<td>
                                                                <span class="table-remove"><a href="pacientes.php?id='.$con['pessoa_id'].'&&tipo=excluir"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Excluir</button></a></span>
                                                            </td> 
                                                </tr>
                                            </tbody>');
                                        }*/
                                    ?>
                            </tbody>
                        </table>  
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
        </script>

<?php
    include('conexao.php');

    if(isset($_POST['cadastrar']))
    {
        $nome=ucwords(strtolower(trim($_POST['txtNome'])));
        $email=ucfirst(strtolower(trim($_POST['txtEmail'])));
        $senha=strtolower(trim($_POST['txtSenha']));
        $carga_horaria=trim($_POST['txtCargaHoraria']);
        $cargo=ucwords(strtolower(trim($_POST['txtCargo'])));
        $salario=trim($_POST['txtSalario']);

        $sql_verificar=('select * from funcionario where funcionario_nome="'.$nome.'" and funcionario_email="'.$email.'";');

        $verificar=mysqli_query($conexao,$sql_verificar);

        $quant_registros=mysqli_num_rows($verificar);


        if($quant_registros>=1)
        {

            echo('<script> window.alert("Funcionário já cadastrado."); 
                window.location="funcionario.php"; </script>');

        }else{

            $sql_inserir=('
            insert into cargo ( 
            cargo_carga_horaria,
            cargo_descricao,
            cargo_valor_salario
            ) values (
            "'.$carga_horaria.'",
            "'.$cargo.'",
            "'.$salario.'");');     

            mysqli_query($conexao,$sql_inserir);

            $id=mysqli_insert_id($conexao);

            $sql_inserir2=('
            insert into funcionario ( 
            funcionario_nome,
            funcionario_email,
            funcionario_senha,
            funcionario_cargo
            ) values (
            "'.$nome.'",
            "'.$email.'",
            "'.$senha.'",
            "'.$id.'");');      

            mysqli_query($conexao,$sql_inserir2);

            echo('<script> window.alert("Cadastrado com sucesso"); 
                    window.location="funcionario.php"; </script>');
        }
    }
?>
</body>
</html>