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

    button[type="submit"] {
        margin-top: 20px;  
    }
</style>

<body>

    <form action="./cadastroBanco.php" method="POST">
        <h1>Cadastro</h1>

        <label class="form-label"></label>
        <input type="text" placeholder="Usuario:" class="form-control" name="usuario">

        <label class="form-label"></label>
        <input type="text" placeholder="Nome e Sobrenome:" class="form-control" name="nome">

        
            <div class="row mb-1">
                <div class="col">
                    <label class="form-label"></label>
                    <input type="number" placeholder="Ano Nascimento:" class="form-control" name="ano_nascimento">
                </div>

                <div class="col">
                    <label class="form-label"></label>
                    <input type="number" placeholder="Telefone:" class="form-control" name="telefone_1">
                </div>

                <div class="col">
                    <label class="form-label"></label>
                    <input type="number" placeholder="CPF:" class="form-control" name="cpf">
                </div>
            </div>

            <label class="form-label"></label>
            <input type="text" placeholder="Logradouro:" class="form-control" name="logradouro">


            <label class="form-label"></label>
            <input type="number" placeholder="Numero Residência:" class="form-control" name="n_casa">


            <label class="form-label"></label>
            <input type="text" placeholder="Bairro:" class="form-control" name="bairro">


            <label class="form-label"></label>
            <input type="text" placeholder="Cidade:" class="form-control" name="cidade">


            <label class="form-label"></label>
            <input type="password" placeholder="Senha:" class="form-control" name="senha">

            <button type="submit" class="btn btn-success">Cadastrar-se</button>
    </form>
</body>

</html>