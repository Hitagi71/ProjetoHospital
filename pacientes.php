<!DOCTYPE html>
<html>

<head>
    <title>Pacientes</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <?php
        $id=null;
        $nome="";
        $rg="";
        $cpf="";
        $sexo="";
        $niver="";
        $cep="";
        $rua="";
        $numero="";
        $bairro="";
        $complemento="";
        $estado="";
        $cidade="";
        $plano="";
    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            include('conexao.php');

            if(isset($_GET['tipo'])){
                $deletar=('delete from endereco where endereco_pessoa='.$id);	
                $result=mysqli_query($conexao,$deletar);

                $deletar=('delete from pessoa where pessoa_id='.$id);	
                $result=mysqli_query($conexao,$deletar);

               echo('<script> window.alert("Excluído com sucesso"); 
                     </script>');
                
            }else{
                $exibir=('select * from pessoa where pessoa_id='.$id);	
                $result=mysqli_query($conexao,$exibir);
                while($con=mysqli_fetch_array($result)){
                    $nome=$con['pessoa_nome'];
                    $rg=$con['pessoa_rg'];
                    $cpf=$con['pessoa_cpf'];
                    $sexo=$con['pessoa_sexo'];
                    $niver=$con['pessoa_data_nasc'];
                }
                

                $exibir=('select * from endereco where endereco_pessoa='.$id);	
                $result=mysqli_query($conexao,$exibir);

                while($con=mysqli_fetch_array($result)){
                    $cep=$con['endereco_cep'];
                    $rua=$con['endereco_rua'];
                    $numero=$con['endereco_numero'];
                    $bairro=$con['endereco_bairro'];
                    $complemento=$con['endereco_complemento'];
                    $estado=$con['endereco_estado'];
                    $cidade=$con['endereco_cidade'];
                }
            }
            
            
        }
    ?>
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
                    <div class="col-12 mt-5">
                        <h1>Cadastro Paciente</h1>
                        <form class="needs-validation"  method="POST" action="#" novalidate>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-4">
                                        <label>Nome:</label>
                                        <input type="text" name="txtNome" id="txtNome" value="<?php echo $nome ?>" class="form-control" required>              
                                    </div>
                                    <div class="col-4">
                                        <label>RG:</label>
                                        <input type="text" name="txtRG" id="txtRG" data-mask="00.000.000-0" value="<?php echo  $rg ?>" class="form-control" required>       
                                    </div>  
                                    <div class="col-4">
                                        <label>CPF:</label>  
                                        <input type="text" name="txtCpf" id="txtCpf" data-mask="000.000.000-00" value="<?php echo  $cpf ?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>    
                            <div class="form-group mt-2">
                                <div class="form-row">
                                    <div class="col-4">
                                        <label>Sexo:</label>
                                        <br/>
                                        <input type="radio" id="txtSexo" name="txtSexo" value="Masculino" checked>
                                        <label for="male">Masculino</label>&nbsp;
                                        <input type="radio" id="txtSexo" name="txtSexo" value="Feminino">
                                        <label for="female">Feminino</label>&nbsp;
                                        <input type="radio" id="txtSexo" name="txtSexo" value="Androgeno">
                                        <label for="other">Androgeno</label>&nbsp;
                                        <input type="radio" id="txtSexo" name="txtSexo" value="Outro">
                                        <label for="other">Outro</label>             
                                    </div>
                                    <div class="col-4">
                                        <label>Data de nascimento:</label>
                                        <input type="date" class="form-control" value="<?php echo  $niver ?>" name="txtNiver" id="txtNiver"  required>       
                                    </div>  
                                    <div class="col-4">
                                        <label>CEP:</label>  
                                        <input type="text" class="form-control" data-mask="00000-000" value="<?php echo  $cep ?>"  name="txtCep"  id="txtCep"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <div class="form-row">
                                    <div class="col-5">
                                        <label>Rua:</label>
                                        <input type="text" class="form-control" name="txtRua" value="<?php echo  $rua ?>" id="txtRua" required>
                                    </div>
                                    <div class="col-2">
                                        <label>Numero:</label>
                                        <input type="number" min="0" class="form-control" name="txtNum" id="txtNum" value="<?php echo  $numero ?>" required>
                                    </div>
                                    <div class="col-5">
                                        <label>Bairro:</label>
                                        <input type="text" class="form-control" name="txtBairro" id="txtBairro" value="<?php echo  $bairro ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="form-row">
                                    <div class="col">
                                        <label>Complemento:</label>
                                        <input type="text" class="form-control" name="txtComplemento" id="txtComplemento" value="<?php echo  $complemento ?>" >
                                    </div>
                                    <div class="col">
                                        <label>Estado:</label>
                                        <input type="text" class="form-control" name="txtUF" id="txtUF" value="<?php echo  $estado ?>" required>
                                    </div>
                                    <div class="col">
                                        <label>Cidade:</label>
                                        <input type="text" min="0" class="form-control" name="txtCidade" id="txtCidade" value="<?php echo  $cidade ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="form-row">
                                    <div class="col-4">
                                        <label>Plano de Saude:</label>
                                        <input type="text" class="form-control" name="txtPlano" id="txtPlano" required>
                                    </div>
                                    <div class="col-2 mt-5">
                                        <a href="pacientes.php">Limpar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                    if($id==null || isset($_GET['tipo'])){
                                        echo '<input type="submit" value="Cadastrar"  name="cadastrar" class="btn btn-primary btn-lg btn-block"/>';
                                    }else{
                                        echo '<input type="submit" value="Editar"  name="editar" class="btn btn-primary btn-lg btn-block"/>';
                                    }
                                ?>
                            </div>
                          
                        </form>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">RG</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Data de nascimento</th>
                                    <th scope="col">Alterar</th>  
                                    <th scope="col">Deletar</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('conexao.php');

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
                                                                <span class="table-remove"><a href="pacientes.php?id='.$con['pessoa_id'].'&&tipo=deletar"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></a></span>
                                                            </td> 
                                                </tr>
                                            </tbody>');
                                        }
                                    ?>
                            </tbody>
                        </table>  
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
        <script src="js/jquery.backstretch.min.js"  type="text/javascript"></script>
        <script src="js/retina-1.1.0.min.js"  type="text/javascript"></script>
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

            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            
            $("#txtCep").keyup("input",function(){
                $.ajax({
                    url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
                    dataType: 'json',
                    success: function(resposta){
                        $("#txtRua").val(resposta.logradouro);
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
        $logradouro=ucwords(strtolower($_POST['txtRua']));
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
            insert into endereco (
            endereco_rua,
            endereco_numero,
            endereco_bairro,
            endereco_complemento,
            endereco_cep,
            endereco_estado,
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

            echo '<script> window.alert("Cadastrado com sucesso "); 
            window.location="pacientes.php"; </script>;';
        }
    }

    if(isset($_POST['editar']))
    {
        $nome=ucwords(strtolower(trim($_POST['txtNome'])));
        $rg=$_POST['txtRG'];
        $cpf=$_POST['txtCpf'];
        $sexo=$_POST['txtSexo'];
        $niver=$_POST['txtNiver'];

        $cep=trim($_POST['txtCep']);
        $logradouro=ucwords(strtolower($_POST['txtRua']));
        $numero=$_POST['txtNum'];
        $bairro=$_POST['txtBairro'];
        $complemento=$_POST['txtComplemento'];
        $estado=$_POST['txtUF'];
        $cidade=$_POST['txtCidade'];
        $plano_saude=$_POST['txtPlano'];

        $sql_inserir=('update pessoa set pessoa_nome="'.$nome.'",pessoa_rg="'.$rg.'",pessoa_cpf="'.$cpf.'",pessoa_sexo="'.$sexo.'",pessoa_data_nasc="'.$niver.'" where pessoa_id='.$id.'');     
        mysqli_query($conexao,$sql_inserir);
        
        $sql_inserir2=('update endereco set endereco_rua="'.$logradouro.'",endereco_numero="'.$numero.'",endereco_bairro="'.$bairro.'",endereco_complemento="'.$complemento.'",endereco_cep="'.$cep.'",endereco_estado="'.$estado.'",endereco_cidade="'.$cidade.'" where endereco_pessoa='.$id);     
        mysqli_query($conexao,$sql_inserir2);

        echo '<script> window.alert("Editado com sucesso"); 
        window.location="pacientes.php"; </script>;';
    }

?>
</body>
</html>