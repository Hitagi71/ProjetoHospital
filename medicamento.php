<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicamento</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
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
                        <h1>Cadastro de Medicamentos</h1>
                        <form class="needs-validation" method="POST" action="#" novalidate>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="">Nome:</label>
                                        <input type="text" name="txtNome" id="txtNome" class="form-control" required>
                                      </div>
                                      <div class="col">
                                        <label for="">Lote:</label>
                                        <input type="text" name="txtLote" id="txtLote" class="form-control" required>
                                      </div>
                                      <div class="col">
                                        <label for="">Tarja:</label>
                                        <input type="text" name="txtTarja" id="txtTarja" class="form-control" required>
                                      </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-4">
                                        <label for="">Data de validade:</label>
                                        <input type="date" name="txtData" id="txtData" class="form-control" required>
                                    </div>
                                    <div class="col-4 d-inline">
                                        <label>Tipo do medicamento:</label>
                                        <input type="text" name="txtTipoMedicamento" id="txtTipoMedicamento" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary btn-lg btn-block"/>
                            </div>
                        </form>

                        <?php

                            include('conexao.php');

                            $exibir=('select * from medicamento INNER JOIN tipo_medic on medicamento.medic_tipo=tipo_medic.tipo_medic_id;');	
                            $result=mysqli_query($conexao,$exibir);
                        
                            echo('<table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Lote</th>
                                    <th scope="col">Tarja</th>
                                    <th scope="col">Validade</th>
                                    <th scope="col">Tipo Medicamento</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                    </tr>
                                </thead>');

                        
                            while($con=mysqli_fetch_array($result))
			                {
                                echo('<tbody<tr>
                                    <th scope="row">'.$con['medic_id'].'</th>');
                                    echo('<td>'.$con['medic_nome'].'</td>');
                                    echo('<td>'.$con['medic_lote'].'</td>');
                                    echo('<td>'.$con['medic_tarja'].'</td>');
                                    echo('<td>'.date("d/m/Y",strtotime($con['medic_validade'])).'</td>');
                                    echo('<td>'.$con['tipo_medic_desc'].'</td>');
                                    echo('<td><span class="table-edit"><a href="medicamento.php?editar='.$con['medic_id'].'">
                                    <button type="button" class="btn btn-info btn-rounded btn-sm my-0">
                                    Editar</button></span></a></td>');
                                    echo('<td><span class="table-remove"><a href="medicamento.php?deletar='.$con['medic_id'].'">
                                    <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                    </td> </tr></tbody>');
      
                            }
                        
                          echo('</table>');
                        ?>

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
                            messageBox('danger','Preencha todos os campos')
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
        
    </script>
<?php
    if(isset($_POST['cadastrar']))
    {
        $nome=ucwords(strtolower(trim($_POST['txtNome'])));
        $lote=$_POST['txtLote'];
        $tarja=$_POST['txtTarja'];
        $validade=$_POST['txtData'];
        $tipo=$_POST['txtTipoMedicamento'];

        $sql_verificar=('select * from medicamento where medic_lote="'.$lote.'";');

        $verificar=mysqli_query($conexao,$sql_verificar);

        $quant_registros=mysqli_num_rows($verificar);


        if($quant_registros>=1)
        {

            echo('<script> window.alert("Registro anteriormente já realizado"); 
                window.location="medicamento.php"; </script>');

        }else{

            $sql_inserir=('
            insert into tipo_medic ( 
	        tipo_medic_desc
            ) values (
            "'.$tipo.'");'); 

            mysqli_query($conexao,$sql_inserir);

            $id=mysqli_insert_id($conexao);

            $sql_inserir2=('
            insert into medicamento ( 
            medic_nome,
            medic_lote,
            medic_tarja,
            medic_validade,
	        medic_tipo
            ) values (
            "'.$nome.'",
            "'.$lote.'",
            "'.$tarja.'",
            "'.$validade.'",
            "'.$id.'");');     

            mysqli_query($conexao,$sql_inserir2);

            echo('<script> window.alert("Registrado com sucesso"); 
                    window.location="medicamento.php"; </script>');
        }
    }

    if(isset($_GET['deletar']))
    {

        $codigo=$_GET['deletar'];
        $sql_excluir=('Delete from medicamento where medic_id='.$codigo.';');

        mysqli_query($conexao,$sql_excluir);

        echo('<script> window.alert("Excluído"); 
                    window.location="medicamento.php"; </script>');
    }

?>

</body>
</html>