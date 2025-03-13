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
</style>

<body>

    <form>

        <div class="col">
        <input type="text" placeholder="Usuario:" class="form-control" >
       
        
        <div class="form-group">
        <input type="password" placeholder="Senha:" class="form-control" >
        </div>

        <div class="form-group">
        <input type="text" id="nome" placeholder="Nome:" title="Escreva o seu Nome" >
        </div>

        <div class="form-group">
        <input type="text" placeholder="Ano Nascimento:" class="form-control" >
        </div>

        <div class="form-group">
        <input type="text" placeholder="CPF:" class="form-control" >
        </div>
        
        <div class="form-group">
        <input type="text" placeholder="Telefone:" class="form-control" >
        </div>
        
        <div class="form-group">
        <input type="text" placeholder="Logradouro:" class="form-control" >
        </div>
        
        <div class="form-group">
        <input type="text" placeholder="Numero Residência:" class="form-control" name="user">
        </div>
        
        <div class="form-group">
        <input type="text" placeholder="Bairro:" class="form-control" name="user">
        </div>
        
        <div class="form-group">
        <input type="text" placeholder="Cidade:" class="form-control" name="user">
        </div>
    </form>
</body>

</html>