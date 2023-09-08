<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="processa.php">
        <label>Nome: </label>
        <input type="text" name="username" placeholder="Digite o nome completo"><br><br>

        <label>E-Mail: </label>
        <input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="Digite o seu melhor e-mail"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>