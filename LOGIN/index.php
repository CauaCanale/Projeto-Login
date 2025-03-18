<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
        display: flex;
        justify-content: center;
        background-color: #0e0e0e;
        color: #f2f2f2;
    }

    form {
        width: 500px;
    }

    a{
        margin-top: 20px;
        margin-left: 20px;
    }

    button[type="submit"]{
        margin-top: 20px;
    }

    h1{
        margin-top: 50px;
    }
</style>

<body>
    <form action="auxlogin.php" method="POST" class="mt-5">

        <h1>Login</h1>

        <label class="form-label">Usuario:</label>
        <input type="text" class="form-control" name="user" required>

        <label class="form-label">Senha:</label>
        <input type="password" class="form-control" name="password" required>
        
        <button type="submit" class="btn btn-success">Entrar</button>
        
        <a class="btn btn-primary" href="cadUser.php">Cadastrar-se</a>

        <a class="btn btn-warning" href="esqueciSenha.php">Esqueceu a senha? clique aqui </a>
    </form>

</body>

</html>