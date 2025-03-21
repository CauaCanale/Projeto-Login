<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<html lang="pt-br"
<?php

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_usuario';

$resultado = $banco->query($select)->fetchAll();


?>
main class="container my-5">
    <table class="table table-striped">    
        <tr>
            <td>ID</td>
            <td>USUARIO</td>
            <td>ID_PESSOA</td>
            <td class="text-center">AÇÕES</td>
        </tr>

        <?php foreach ($resultado as $linha) {  ?>
            <tr>
                <td> <?= $linha['id'] ?> </td>
                <td><?= $linha['usuario'] ?></td>
                <td><?= $linha['id_pessoa'] ?></td>
                <td class="text-center">
                    <a href="./formulario_informacoes.php?id_pessoa=<?= $linha['id'] ?>" class="btn btn-primary">Abrir</a>
                    <a href="./formulario_editar.php?id_pessoa=<?= $linha['id_pessoa'] ?>" class="btn btn-warning">Editar</a>
                    <a href="./formulario_deletar.php?id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</main>