<?php

 
$usuario_form = $_POST['usuario'];
$senha_form = $_POST['senha'];


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert = 'INSERT INTO tb_usuario (usuario,senha) VALUE (:usuario , :senha)';

$box = $banco->prepare($insert);

$box->execute([
    ':usuario' => $usuario_form,
    ':senha' => $senha_form,
]);

$nome= $_POST['nome'];
$ano_nascimento= $_POST['ano_nascimento'];
$cpf= $_POST['cpf'];
$telefone_1= $_POST['telefone_1'];
$logradouro= $_POST['logradouro'];
$casaNumero= $_POST['n_casa'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];

$insert = 'INSERT INTO  tb_pessoa (nome, ano_nascimento, cpf, telefone_1, logradouro, n_casa, bairro,cidade) VALUE (:nome, :nascimento, :cpf, :telefone_1, :logradouro, :n_casa, :bairro, :cidade)';

$boxe = $banco->prepare($insert);

$boxe->execute([
    ':nome'=>$nome,
    ':nascimento'=>$ano_nascimento,
    ':cpf'=>$cpf,
    ':telefone_1'=>$telefone_1,
    ':logradouro'=>$logradouro,
    ':n_casa'=>$casaNumero,
    ':bairro'=>$bairro,
    ':cidade'=>$cidade
]);

$id_cad = $banco->lastInsertId();

$id_pessoa = $banco->lastInsertId();

$user = $banco->prepare('INSERT INTO tb_usuario (usuario, senha, id_pessoa) VALUES (?, ?, ?)');
$user->execute([$usuario_form, $senha_form, $id_pessoa]);

echo '<script> 
alert("Usuario cadastrado com Sucesso!") 
window.location.replace("index.php")
</script>';