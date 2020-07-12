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
                    <img id="adminFoto" src="imgs/homura.jpg" class="rounded-circle" alt="FotoAdmin" />
                    <h1><b>Homura my love</b></h1>
                </div>
                <div id="listas">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li>
                        <li class="list-group-item">
                            <i class="material-icons size1">person_add</i>
                            <a class="links" href="pacientes.php" target="_self">
                                <h1 class="nomesLista">
                                    <b>Pacientes</b>
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
                        <h1>Agendamento</h1>
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-2">
                                        <label for="">Data:</label>
                                        <input type="date" name="txtData" id="txtData" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label for="">Hora:</label>
                                        <input type="time" name="txtHora" id="txtHora" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="">Tipo de Agendamento:</label>
                                        <input type="text" name="txtTipoAgendamento" id="txtTipoAgendamento" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="">Funcionario:</label>
                                        <input type="text" name="txtFuncionario" id="txtFuncionario" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-4">
                                        <label for="">Equipamento:</label>
                                        <input type="text" name="txtEquipamento" id="txtEquipamento" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label>Paciente:</label>
                                        <input type="text" name="txtPaciente" id="txtPaciente" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Entrada e saida:</label>
                                        <input type="text" name="txtEntradaSaida" id="txtEntradaSaida" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Tipo de Agendamento</th>
                                    <th scope="col">Funcionario</th>
                                    <th scope="col">Equipamento</th>
                                    <th scope="col">Paciente</th>
                                    <th scope="col">Entrada/Saida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>10/12/2020</td>
                                    <td>15:20</td>
                                    <td>Particular</td>
                                    <td>Yetz</td>
                                    <td>Seringa</td>
                                    <td>Nuttylee</td>
                                    <td>15:10</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>11/12/2020</td>
                                    <td>10:20</td>
                                    <td>Clinico</td>
                                    <td>PatoPapao</td>
                                    <td>Peixeira</td>
                                    <td>André</td>
                                    <td>10:00</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>01/12/2020</td>
                                    <td>7:00</td>
                                    <td>Clinico</td>
                                    <td>PatoPapao</td>
                                    <td>Injeção</td>
                                    <td>Vini</td>
                                    <td>6:30</td>
                                </tr>
                            </tbody>
                        </table>
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