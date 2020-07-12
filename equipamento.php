<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
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
                    <img id="adminFoto" src="imgs/homura.jpg" class="rounded-circle" alt="FotoAdmin" />
                    <h1><b>Homura</b></h1>
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
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="">Nome:</label>
                                        <input type="text" name="txtNome" id="txtNome" class="form-control">
                                      </div>
                                      <div class="col">
                                        <label for="">Descrição:</label>
                                        <input type="text" name="txtDescricao"id="txtDescricao" class="form-control">
                                      </div>
                                      <div class="col">
                                        <label for="">Marca:</label>
                                        <input type="text" name="txtMarca" id="txtMarca" class="form-control">
                                      </div>  
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-4">
                                        <label for="">Estado:</label>
                                        <input type="text" name="txtEstado" id="txtEstado" class="form-control">
                                    </div>
                                    <div class="col-3 d-inline">
                                        <label>Tipo Equipamento</label>
                                        <select class="form-control" name="txtEquipamento" id="txtEquipamento" id="exampleFormControlSelect1">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-4 mt-4">
                                        <button type="button" class="btn btn-primary btn-lg rounded-circle">+</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Tipo Equip</th>  
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Ruanzinho</td>
                                <td>Lenda</td>
                                <td>Diferenciado 1</td>
                                <td>SP</td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Vini</td>
                                <td>Gado</td>
                                <td>Diferenciado 2</td>
                                <td>SP</td>
                                <td>2</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Dedé</td>
                                <td>Safado</td>
                                <td>Diferenciado 3</td>
                                <td>SP</td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Nunutty</td>
                                <td>Psicopata</td>
                                <td>Diferenciado 4</td>
                                <td>SP</td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>Tatalita</td>
                                <td>Fofa</td>
                                <td>Diferenciado 5</td>
                                <td>SP</td>
                                <td>5</td>
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