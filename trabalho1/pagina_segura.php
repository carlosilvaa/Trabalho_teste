<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Página segura</title>
</head>
<body>
        <h1>Página segura</h1>
        <?php
        session_start():
        if(!isset($_SESSION['logado']) || $_SESSION['logado'] !== true){
            header('Location: index.php');
            exit;
        }
        ?>

        <p>Bem vindo à página segura. Você foi autenticado com sucesso!</p>
        <a href="logout.php">Logout</a>
</body>
</html>