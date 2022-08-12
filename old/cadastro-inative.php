
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link href="./css/style_cadastro.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<main class="all">

<div class="primaryColumnForm"> 
    <div class="content-primary">
        <h2 class="title title-primary">Login</h2>
        <p class="description description-primary">Já tem uma conta?<br>faça seu login abaixo!</p>
        <form action="cadastro.html">
            <button class="btn btn-outline-dark">Login</button>
        </form>
    </div>
</div>
    
<div class="secondColumnForm">
    <div class="content-secondary">
        <h2 class="title-secondary">Cadastro</h2>
        <form action="./php/recebedados.php" method="POST" class="form">
        <label class="label-input mt-2" for="">
            <input type="text" placeholder="Usuario" name="userLogin">
        </label>
        <label class="label-input mt-2" for="">
            <input type="email" placeholder="Email" name="userEmail">
        </label>
        <label class="label-input mt-2 pl-2" for="">
            <input type="password" placeholder="Senha" name="userPass">
        </label>

        <button class="btn btn-outline-dark mt-3" type="reset">Limpar dados</button>
        <button class="btn btn-outline-success mt-3" type="submit" name="submit">Criar</button>
        </form>
        </div>
    </div>
</main>
</body>

</html>