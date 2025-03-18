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

    h1 {
        margin-top: 50px;
    }
</style>
<?php
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$id_pessoa = $_GET['id_pessoa'];

$select = "SELECT tb_pessoa.*, tb_usuario.usuario, tb_usuario.senha FROM tb_usuario INNER JOIN tb_pessoa ON tb_usuario.id_pessoa = tb_pessoa.id WHERE tb_usuario.id_pessoa = $id_pessoa";

$dados = $banco->query($select)->fetch();


?>

<body>

    <form>
        <input type="hidden" name="id" value="<?= $dados['id'] ?>">

        <h1>Editar Informações</h1>

        <label class="form-label"></label>
        <input type="text" placeholder="Usuario:" class="form-control" name="usuario" value="<?= $dados['usuario'] ?>" disabled>

        <label class="form-label"></label>
        <input type="text" placeholder="Nome e Sobrenome:" class="form-control" name="nome" value="<?= $dados['nome'] ?>" disabled>


        <div class="row mb-1">
            <div class="col">
                <label class="form-label"></label>
                <input type="number" placeholder="Ano Nascimento:" class="form-control" name="ano_nascimento" value="<?= $dados['ano_nascimento'] ?>" disabled>
            </div>

            <div class="col">
                <label class="form-label"></label>
                <input type="number" placeholder="Telefone 1:" class="form-control" name="telefone_1" value="<?= $dados['telefone_1'] ?>" disabled>
            </div>

            <div class="col">
                <label class="form-label"></label>
                <input type="number" placeholder="Telefone 2:" class="form-control" name="telefone_2" value="<?= $dados['telefone_2'] ?>"
            </div>

            <div class="col">
                <label class="form-label"></label>
                <input type="number" placeholder="CPF:" class="form-control" name="cpf" value="<?= $dados['cpf'] ?>" disabled>
            </div>
        </div>

        <label class="form-label"></label>
        <input type="text" placeholder="Logradouro:" class="form-control" name="logradouro" value="<?= $dados['logradouro'] ?>" disabled>

        <div class="row mb-1">
            <div class="col">
                <label class="form-label"></label>
                <input type="number" placeholder="Numero Residência:" class="form-control" name="n_casa" value="<?= $dados['n_casa'] ?>" disabled>
            </div>

            <div class="col">
                <label class="form-label"></label>
                <input type="text" placeholder="Bairro:" class="form-control" name="bairro" value="<?= $dados['bairro'] ?>" disabled>
            </div>
        </div>

        <label class="form-label"></label>
        <input type="text" placeholder="Cidade:" class="form-control" name="cidade" value="<?= $dados['cidade'] ?>" disabled>


        <label class="form-label"></label>
        <input type="password" placeholder="Senha:" class="form-control" name="senha" value="<?= $dados['senha'] ?>" disabled>

        <a href="index.php" class="btn btn-primary mt-3">Voltar</a>
    </form>
</body>



</html>