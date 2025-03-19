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

    <form action="./banco_editar.php" method="POST">
        <input type="hidden" name="id" value="<?= $dados['id'] ?>">

        <h1>Editar Informações</h1>

        <label class="form-label">Usuario</label>
        <input type="text" placeholder="Usuario:" class="form-control" name="usuario" value="<?= $dados['usuario'] ?>" disabled>

        <label class="form-label">Nome e Sobrenome</label>
        <input type="text" placeholder="Nome e Sobrenome:" class="form-control" name="nome" value="<?= $dados['nome'] ?>" disabled>


        <div class="row mb-1">
            <div class="col">
                <label class="form-label">Telefone 1</label>
                <input type="number" placeholder="Telefone 1:" class="form-control" name="telefone_1" value="<?= $dados['telefone_1'] ?>" required>
            </div>

            <div class="col">
                <label class="form-label">telefone 2</label>
                <input type="number" placeholder="Telefone 2:" class="form-control" name="telefone_2" value="<?= $dados['telefone_2'] ?>" required>
            </div>
        </div>

        <div class="row mb-1">
            <div class="col">
                <label class="form-label">Ano Nascimento</label>
                <input type="number" placeholder="Ano Nascimento:" class="form-control" name="ano_nascimento" value="<?= $dados['ano_nascimento'] ?>" disabled>
            </div>

            <div class="col">
                <label class="form-label">CPF</label>
                <input type="number" placeholder="CPF:" class="form-control" name="cpf" value="<?= $dados['cpf'] ?>" disabled>
            </div>
            </div>

        <label class="form-label">Logradouro</label>
        <input type="text" placeholder="Logradouro:" class="form-control" name="logradouro" value="<?= $dados['logradouro'] ?>" required>

        <div class="row mb-1">
            <div class="col">
                <label class="form-label">Numero Residência</label>
                <input type="number" placeholder="Numero Residência:" class="form-control" name="n_casa" value="<?= $dados['n_casa'] ?>" required>
            </div>

            <div class="col">
                <label class="form-label">Bairro</label>
                <input type="text" placeholder="Bairro:" class="form-control" name="bairro" value="<?= $dados['bairro'] ?>" required>
            </div>
        </div>

        <label class="form-label">Cidade</label>
        <input type="text" placeholder="Cidade:" class="form-control" name="cidade" value="<?= $dados['cidade'] ?>" required>


        <label class="form-label">Senha</label>
        <input type="password" placeholder="Senha:" class="form-control" name="senha" value="<?= $dados['senha'] ?>" required>

        <div class="form-group">
                <button type="submit" class="btn btn-primary mt-3">Salvar Alterações</button>
            </div>
        
    </form>
</body>

</html>
