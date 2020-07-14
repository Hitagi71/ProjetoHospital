<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="author" content="O ruan chingou a mae do Dede">
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 bg-primary rounded lado">
                <!--<img src="imgs/doutor.jpg"> -->
            </div>
            <div class="col-8 divForm  ">
                <h1 class="text-center titulo">Login</h1>
                <form class="ml-5 mr-5 needs-validation form rounded" method="POST" action="#" novalidate>
                    <div class="form-group mt-5">
                        <label>Email</label>
                        <input type="email" id="txtEmail" name="txtEmail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" id="txtSenha" name="txtSenha" class="form-control" required>
                    </div>
                    <p>Não tem uma conta?&nbsp;&nbsp;<a href="funcionario.php">Cadastre-se</a></p>
                    <br/>
                    <div class="text-center">
                        <input type="submit" name="entrar" value="Entrar" class="btn btn-primary btn-lg mt-5 rounded">
                    </div>
                </form>
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

    <?php
        include('conexao.php');

			session_start();
			
            if(isset($_POST['entrar']))
			{
				$email=strtolower(trim($_POST['txtEmail']));
				$senha=strtolower(trim($_POST['txtSenha']));
                
				$sqlbuscar=('select * from funcionario where funcionario_email="'. $email .'" and funcionario_senha="'.$senha.'";');
                
				$resul=mysqli_query($conexao,$sqlbuscar);
				
			if(mysqli_num_rows($resul)>0)
			{
                    $con=mysqli_fetch_array($resul);
					
					$_SESSION['user_id']=$con['funcionario_id'];
                    $_SESSION['user_email']=$con['funcionario_email'];					
					
			}else
			{
					
				echo('<script>
							window.alert("Usuário e/ou senha inválidos");
							window.location=("login.php");
						</script>');
			}
		}
        
    ?>
</body>

</html>