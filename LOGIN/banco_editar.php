<?php

var_dump($_POST);

$editarId = $_POST['id'];
$editarNome = $_POST['nome'];
$editarAno_nasc = $_POST['ano_nascimento'];
$editarCpf = $_POST['cpf'];
$editarTelefone = $_POST['Telefone_1'];
$editarLogradouro = $_POST['logradouro'];
$editar_numero_casa = $_POST['n_casa'];
$editarBairro = $_POST['bairro'];
$editarCidade = $_POST['cidade'];


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_usuario SET usuario = :usuario, senha = :senha  WHERE id = :id';

$box = $banco->prepare($update);

$box->execute([ 
    ':id' => $editarId,
    ':usuario' => $editarUsuario,
    ':senha' => $editarSenha
]);

$update = 'UPDATE tb_pessoa SET telefone = :telefone_1, logradouro = :logradouro, n_casa = :n_casa, bairro = :bairro, cidade = :cidade   WHERE id_pessoa = :id';

$box = $banco->prepare($update);

$box->execute([
    ':id' => $editarId,
    ':telefone_1' => $editarTelefone,
    ':logradouro' => $editarLogradouro,
    ':n_casa' =>     $editar_numero_casa,
    ':bairro' =>     $bairro,
    ':cidade' =>     $cidade
    
]);

echo '<script> 
alert("Usuario editado com Sucesso!") 
window.location.replace("user_info.php")
</script>';
