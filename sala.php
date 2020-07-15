<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala</title>
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
                        <a href="#"><i class="material-icons size">chat_bubble_outline</i></a
              >
            </li>
            <li>
              <a href="#"
                ><i class="material-icons size">notifications_none</i></a
              >
              <span class="badge">3</span>
            </li>
          </ul>
          <div class="search">
            <form>
              <div class="input-group mb-2">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Procurar"
                />
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="material-icons">search</i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </nav>
        <?php
            include('conexao.php');
            $con = "";
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h1>Cadastro de Sala</h1>
                        <form  class="needs-validation" method="POST" action="#" novalidate>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="">Numero:</label>
                                        <input type="number" name="txtNumero" id="txtNumero" class="form-control"  value="<?php echo($con['sala_numero']); ?>" required>
                                      </div>
                                      <div class="col">
                                        <label for="">Ocupada:</label>
                                        <input type="text" name="txtOcupada" id="txtOcupada" class="form-control" value="<?php echo($con['sala_ocupada']); ?>" required>
                                      </div>
                                      <div class="col">
                                        <label for="">Tipo da sala:</label>
                                        <input type="text" name="txtTipo" id="txtTipo" class="form-control" value="<?php echo($con['tipo_sala_desc']); ?>" required>
                                      </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary btn-lg btn-block"/>
                            </div>
                        </form>

                        <?php

                            $exibir=('select * from sala INNER JOIN tipo_sala on sala.sala_tipo=tipo_sala.tipo_sala_id;');	
                            $result=mysqli_query($conexao,$exibir);


                            echo('<table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Numero</th>
                                    <th scope="col">Ocupada</th>
                                    <th scope="col">Tipo da sala</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                    </tr>
                                </thead>');

                        
                            while($con=mysqli_fetch_array($result))
			                {
                                echo('<tbody<tr>
                                    <th scope="row">'.$con['sala_id'].'</th>');
                                    echo('<td>'.$con['sala_numero'].'</td>');
                                    echo('<td>'.$con['sala_ocupada'].'</td>');
                                    echo('<td>'.$con['tipo_sala_desc'].'</td>');
                                    echo('<td><span class="table-edit"><a href="sala.php?editar='.$con['sala_id'].'">
                                    <button type="button" class="btn btn-info btn-rounded btn-sm my-0">
                                    Editar</button></span></a></td>');
                                    echo('<td><span class="table-remove"><a href="sala.php?deletar='.$con['sala_id'].'">
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
        $numero=trim($_POST['txtNumero']);
        $ocupada=ucfirst(strtolower(trim($_POST['txtOcupada'])));
        $tipo=ucfirst(strtolower(trim($_POST['txtTipo'])));

        $sql_verificar=('select * from sala where sala_numero="'.$numero.'";');

        $verificar=mysqli_query($conexao,$sql_verificar);

        $quant_registros=mysqli_num_rows($verificar);

        if($quant_registros>=1)
        {

            echo('<script> window.alert("Sala já cadastrada."); 
                window.location="equipamento.php"; </script>');

        }else{

            $sql_inserir=('
            insert into tipo_sala ( 
            tipo_sala_desc
            ) values (
            "'.$tipo.'");');     

            mysqli_query($conexao,$sql_inserir);

            $id=mysqli_insert_id($conexao);

            $sql_inserir2=('
            insert into sala ( 
            sala_numero,
            sala_ocupada,
            sala_tipo
            ) values (
            "'.$numero.'",
            "'.$ocupada.'",
            "'.$id.'");');     

            mysqli_query($conexao,$sql_inserir2);

            echo('<script> window.alert("Inserido com sucesso"); 
                    window.location="sala.php"; </script>');
        }
    }

    if(isset($_GET['editar']))
    {

        $codigo=$_GET['editar'];

        $sql_achar=('select * from sala inner join tipo_sala on sala.sala_id=tipo_sala.tipo_sala_id where sala_id='.$codigo.';');

        $achar=mysqli_query($conexao,$sql_achar);

        $quant_registros=mysqli_num_rows($achar);

        if($quant_registros>=1)
        {
            $con = mysqli_fetch_array($achar);
           
        }
    }

    if(isset($_GET['deletar']))
    {

        $codigo=$_GET['deletar'];
        $sql_excluir=('Delete from sala where sala_id='.$codigo.';');

        mysqli_query($conexao,$sql_excluir);

        echo('<script> window.alert("Excluído"); 
                    window.location="sala.php"; </script>');
    }
?>
</body>
</html>