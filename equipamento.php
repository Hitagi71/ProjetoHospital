<!DOCTYPE html>
<html>

<head>
    <title>Equipamento</title>
    <meta charset="utf-8" />
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
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h1>Cadastro de Equipamento</h1>
                        <form class="needs-validation" method="POST" action="#" novalidate>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="">Nome:</label>
                                        <input type="text" name="txtNome" id="txtNome" class="form-control" required>
                                      </div>
                                      <div class="col">
                                        <label for="">Descrição:</label>
                                        <input type="text" name="txtDescricao" id="txtDescricao" class="form-control" required>
                                      </div>
                                      <div class="col">
                                        <label for="">Marca:</label>
                                        <input type="text" name="txtMarca" id="txtMarca" class="form-control" required>
                                      </div>  
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-4">
                                        <label for="">Estado:</label>
                                        <input type="text" name="txtEstado" id="txtEstado" class="form-control" required>
                                    </div>
                                    <div class="col-3 d-inline">
                                        <label>Tipo Equipamento</label>
                                        <input type="text" name="txtTipo" id="txtTipo" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary btn-lg btn-block"/>
                            </div>
                        </form>

                        <?php
                            include('conexao.php');

                            $exibir=('select * from equipamento INNER JOIN tipo_equipamento on equipamento.equip_etipo=tipo_equipamento.tipo_equip_id;');	
                            $result=mysqli_query($conexao,$exibir);

                            echo('<table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Tipo Equipamento</th>
                                    <th scope="col">Editar</th>  
                                    <th scope="col">Deletar</th>   
                                </tr>
                                </thead>');

                            while($con=mysqli_fetch_array($result))
			                {
                                echo('<tbody<tr>
                                    <th scope="row">'.$con['equip_id'].'</th>');
                                    echo('<td>'.$con['equip_nome'].'</td>');
                                    echo('<td>'.$con['equip_descricao'].'</td>');
                                    echo('<td>'.$con['equip_marca'].'</td>');
                                    echo('<td>'.$con['equip_estado'].'</td>');
                                    echo('<td>'.$con['tipo_equip_nome'].'</td>');
                                    echo('<td><span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                    </td>');
                                    echo('<td><span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
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
        $descricao=ucfirst(strtolower(trim($_POST['txtDescricao'])));
        $marca=ucwords(strtolower(trim($_POST['txtMarca'])));
        $estado=ucwords(strtolower(trim($_POST['txtEstado'])));
        $tipo=ucfirst(strtolower(trim($_POST['txtTipo'])));

        $sql_verificar=('select * from equipamento where equip_nome="'.$nome.'" and equip_descricao="'.$descricao.'";');

        $verificar=mysqli_query($conexao,$sql_verificar);

        $quant_registros=mysqli_num_rows($verificar);


        if($quant_registros>=1)
        {

            echo('<script> window.alert("Equipamento já cadastrado."); 
                window.location="equipamento.php"; </script>');

        }else{

            $sql_inserir=('
            insert into tipo_equipamento ( 
            tipo_equip_nome
            ) values (
            "'.$tipo.'");');     

            mysqli_query($conexao,$sql_inserir);

            $id=mysqli_insert_id($conexao);

            $sql_inserir2=('
            insert into equipamento ( 
            equip_nome,
            equip_descricao,
            equip_marca,
            equip_estado,
            equip_etipo
            ) values (
            "'.$nome.'",
            "'.$descricao.'",
            "'.$marca.'",
            "'.$estado.'",
            "'.$id.'");');     

            mysqli_query($conexao,$sql_inserir2);

            echo('<script> window.alert("Inserido com sucesso"); 
                    window.location="equipamento.php"; </script>');
        }
    }
?>
</body>
</html>