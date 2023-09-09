<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php

        //verificar se o formulário foi enviado
        if($_SERVER ['REQUEST_METHOD'] === 'POST'){
                //validação simples de usuário e senha
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username === 'usuario' && $password === 'senha'){

                header('Location: pagina_segura.php');
                exit;
            } else{
                echo '<p style="color: red;">Credenciais inválidas';
            }
        }
    ?>
    <form method="POST">
        <label for="username">Usuário</label>
        <input type="text" name="username" id="username"required placeholder="Digite o seu nome de usuário"><br>

        <label for="password">Senha</label>
        <input type="text" name="password" id="password"required placeholder="Digite sua senha!"><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>