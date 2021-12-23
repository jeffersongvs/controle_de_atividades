<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do usuario - Controle de Atividades</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<!-- formulario de cadastro -->
<body>
    <form action="db/cad_usuario.php" method="post">
        Nome:
        <input type="text" name="nome"> <br>
        Email:
        <input type="email" name="email"> <br>
        Senha:
        <input type="password" name="senha" id="senha" onkeyup="validaSenha()"> <br>
        Confirmação de senha:
        <input type="password" name="senha2" id="senha2" onkeyup="validaSenha()"> <br>
        <button>Cadastrar</button>
    </form>

    <!-- Um validador para confirmar a senha -->
    <script>
        function validaSenha(){
            $senha = document.getElementById("senha").value;
            $senha2 = document.getElementById("senha2").value;
            if($senha != $senha2){
                document.getElementById("senha2").style.border = "red 1px solid";
            }else{
                document.getElementById("senha2").style.border = "green 1px solid";
            }
        }
    </script>
</body>
<?php require_once "footer.php"; ?>