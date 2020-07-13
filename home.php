<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="author" content="Ruan otario">
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/simple-sidebar.css" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.min.css" />
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
            <div class="container-fluid">
                <h1 class="welcome"><b>Bem Vindo - Doutor Alan</b></h1>
            </div>
            <div class="container container1">
                <div class="col-xs-2">
                    <div class="box1">
                    <a class="links" href="pacientes.php" target="_self">
                        <img src="imgs/cliente.png" />
                    </a>
                        <h1>Pacientes</h1>
                    </div>
                </div> 
                <div class="col-xs-2">
                    <div class="box2">
                    <a class="links" href="medicamentos.php" target="_self">
                        <img src="imgs/healing.png" />
                    </a>
                        <h1>Medicamentos</h1>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="box3">
                    <a class="links" href="agendamentos.php" target="_self">
                        <img src="imgs/agendamento.png" />
                    </a>
                        <h1>Agendamentos</h1>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="box4">
                    <a class="links" href="agendamentos.php" target="_self">
                        <img src="imgs/equipamento.png" />
                    </a>
                        <h1>Equipamentos</h1>
                    </div>
                </div>
            </div>
            <br/>    
            <div id="my-calendar" class="calendar"></div>
        </div>
    </div>
    <footer class="text-center text-green">
        <div class="mt-3">
            &copy;Todos Direitos Reservados
        </div>
    </footer>
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-notify.min.js" type="text/javascript"></script>
    <script src="js/zabuto_calendar.min.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript">
        (function() {
            window.addEventListener(
                "load",
                function() {
                    var forms = document.getElementsByClassName("needs-validation");
                    var validation = Array.prototype.filter.call(forms, function(
                        form
                    ) {
                        form.addEventListener(
                            "submit",
                            function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                    messageBox("danger", "Preencha todos os campos");
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    });
                },
                false
            );
        })();

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        function messageBox(type, message) {
            $.notify({
                message: message,
            }, {
                type: type,
                placement: {
                    from: "top",
                    align: "center",
                },
            });
        }

        $(document).ready(function () {
            $("#my-calendar").zabuto_calendar({
                language: "pt",
                nav_icon: { 
                        prev: '<i class="material-icons">keyboard_arrow_left</i>', 
                        next: '<i class="material-icons">keyboard_arrow_right</i>' 
                },
                data: [
                        { "date": "2020-07-17", "title": "Consulta-Paciente:André" },
                        { "date": "2020-07-26", "title": "Consulta-Paciente:Ruan" },
                    ]
            });
        });
  
    </script>
</body>

</html>