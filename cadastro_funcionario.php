<?php
    include('conexao.php');

    if(isset($_POST['cadastrar']))
    {
        $nome=ucwords(strtolower(trim($_POST['txtNome'])));
        $email=ucfirst(strtolower(trim($_POST['txtEmail'])));
        $senha=strtolower(trim($_POST['txtSenha']));
        $carga_horaria=trim($_POST['txtCargaHoraria']);
        $cargo=ucwords(strtolower(trim($_POST['txtCargo'])));
        $salario=trim($_POST['txtSalario']));

        $sql_verificar=('select * from funcionario where funcionario_nome="'.$nome.'" and funcionario_email="'.$email.'";');

        $verificar=mysqli_query($conexao,$sql_verificar);

        $quant_registros=mysqli_num_rows($verificar);


        if($quant_registros>=1)
        {

            echo('<script> window.alert("Funcionário já cadastrado."); 
                window.location="funcionario.php"; </script>');

        }else{

            $sql_inserir=('
            insert into cargo ( 
            cargo_carga_horaria,
            cargo_descricao,
            cargo_valor_salario
            ) values (
            "'.$carga_horaria.'",
            "'.$cargo.'",
            "'.$salario.'");');     

            mysqli_query($conexao,$sql_inserir);

            $id=mysqli_insert_id($conexao);

            $sql_inserir2=('
            insert into funcionario ( 
            funcionario_nome,
            funcionario_email,
            funcionario_senha,
            funcionario_cargo
            ) values (
            "'.$nome.'",
            "'.$email.'",
            "'.$senha.'",
            "'.$id.'");');      

            mysqli_query($conexao,$sql_inserir2);

            echo('<script> window.alert("Cadastrado com sucesso"); 
                    window.location="funcionario.php"; </script>');
        }
    }
?>