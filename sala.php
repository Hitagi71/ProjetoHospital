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
                                    <b>Cadastros </b>
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
                        <legend>Cadastro de Sala</legend>
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="">Numero:</label>
                                        <input type="number" name="txtNome" id="txtNome" class="form-control">
                                      </div>
                                      <div class="col">
                                        <label for="">Ocupada:</label>
                                        <input type="text" name="txtLote" id="txtLote" class="form-control">
                                      </div>
                                      <div class="col">
                                        <label for="">Tipo da sala:</label>
                                        <input type="text" name="txtTarja" id="txtTarja" class="form-control">
                                      </div>
                                </div>
                            </div>
                        </form>
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Numero</th>
                                <th scope="col">Ocupada</th>
                                <th scope="col">Tipo da sala</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>3</td>
                                <td>Sim</td>
                                <td>Preta</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>5</td>
                                <td>Não</td>
                                <td>Amarelo</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>7</td>
                                <td>Sim</td>
                                <td>Vermelha</td>
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
</body>
</html>