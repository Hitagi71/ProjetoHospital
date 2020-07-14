<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicamento</title>
    <meta name="author" content="dede">
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
                        <h1>Cadastros auxiliares</h1>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Qual cadastro deseja realizar</label>
                            <select class="form-control" onchange="mudarForm()" id="select">
                                <option>Selecione...</option>
                                <option>Tipo de Equipamento</option>
                                <option>Tipo de Medicamento</option>
                                <option>Plano de Saude</option>
                                <option>Cargo</option>
                                <option>Tipo da Sala</option>
                            </select>
                        </div>
                        
                        <form class="needs-validation"  method="POST" action="#" novalidate>
                            <div class="tipo_equipamento" id="tipo_equipamento">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-3">
                                            <label for="">Nome:</label>
                                            <input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="Nome do Tipo" required>
                                        </div>   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary btn-lg btn-block"/>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome do Tipo de Equipamento</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Deletar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Seringa</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Serrote</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Agulha</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>

                        <form class="needs-validation"  method="POST" action="#" novalidate>
                            <div class="tipo_medicamento" id="tipo_medicamento">
                            <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-3">
                                            <label for="">Medicamento Descrição:</label>
                                            <input type="text" name="txtDescricao" id="txtDescricao" class="form-control" placeholder="Descrição Medicamento" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary btn-lg btn-block"/>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Medicamento Descrição</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Deletar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Generico</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Generico</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Generico</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>

                        <form class="needs-validation"  method="POST" action="#" novalidate>
                            <div class="plano_saude" id="plano_saude">
                            <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-3">
                                            <label for="">Nome Do Plano:</label>
                                            <input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="Nome do Plano" required>
                                        </div>   
                                    </div>
                            </div>
                                <div class="form-group">
                                    <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary btn-lg btn-block"/>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Plano de Saude</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Deletar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Particular</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Publico</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Convenio</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>

                        <form class="needs-validation"  method="POST" action="#" novalidate>
                            <div class="cargo" id="cargo">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-4">
                                            <label for="">Descrição:</label>
                                            <input type="text" name="txtDescricao" id="txtDescricao" class="form-control" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="">Carga horario:</label>
                                            <input type="text" name="txtCargaHorario" id="txtCargaHorario" class="form-control" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="">Salário:</label>
                                            <input type="text" name="txtSalario" id="txtSalario" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary btn-lg btn-block"/>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Descrição</th>
                                            <th scope="col">Carga horario</th>
                                            <th scope="col">Salário</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Deletar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Recepcionista</td>
                                            <td>150</td>
                                            <td>R$ 1.200,00</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                            <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                               
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Pediatra</td>
                                            <td>150</td>
                                            <td>R$ 2.200,00</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                            <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cirurgião</td>
                                            <td>250</td>
                                            <td>R$ 7.500,00</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                            <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        
                        <form class="needs-validation"  method="POST" action="#" novalidate>
                            <div class="tipo_sala" id="tipo_sala">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-4">
                                            <label for="">Tipo da sala:</label>
                                            <input type="text" name="txtTipo" id="txtTipo" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary btn-lg btn-block"/>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tipo de Sala</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Deletar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Preta</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                            <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Vermelha</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                            <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Amarela</td>
                                            <td>
                                <span class="table-edit"><button type="button"
                                    class="btn btn-info btn-rounded btn-sm my-0">Editar</button></span>
                                </td>
                                            <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-danger btn-rounded btn-sm my-0">Deletar</button></span>
                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                      
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
                            messageBox('danger', 'Preencha todos os campos')
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        function mudarForm(){
            if($('#select').val()=="Tipo de Equipamento"){
                document.getElementById("tipo_medicamento").style.display="none";
                document.getElementById("plano_saude").style.display="none";
                document.getElementById("cargo").style.display="none";
                document.getElementById("tipo_sala").style.display="none";
                document.getElementById("tipo_equipamento").style.display="block";
            }else if($('#select').val()=="Tipo de Medicamento"){
                document.getElementById("tipo_medicamento").style.display="block";
                document.getElementById("tipo_equipamento").style.display="none";
                document.getElementById("cargo").style.display="none";
                document.getElementById("tipo_sala").style.display="none";
                document.getElementById("plano_saude").style.display="none";
            }else if($('#select').val()=="Plano de Saude"){
                document.getElementById("tipo_medicamento").style.display="none";
                document.getElementById("tipo_equipamento").style.display="none";
                document.getElementById("cargo").style.display="none";
                document.getElementById("tipo_sala").style.display="none";
                document.getElementById("plano_saude").style.display="block";
            }else if($('#select').val()=="Cargo"){
                document.getElementById("tipo_medicamento").style.display="none";
                document.getElementById("tipo_equipamento").style.display="none";
                document.getElementById("cargo").style.display="block";
                document.getElementById("tipo_sala").style.display="none";
                document.getElementById("plano_saude").style.display="none";
            }else{
                document.getElementById("tipo_medicamento").style.display="none";
                document.getElementById("tipo_equipamento").style.display="none";
                document.getElementById("cargo").style.display="none";
                document.getElementById("tipo_sala").style.display="block";
                document.getElementById("plano_saude").style.display="none";   
            }
        }

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
</body>
</html>