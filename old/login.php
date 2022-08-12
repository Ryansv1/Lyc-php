<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="./css/style_login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Criar conta</h2>
                <p class="description description-primary">Crie sua conta para se manter conectado conosco</p>
                <p class="description description-primary">faça já o seu cadastro</p>
                <form action="cadastro.html">
                    <button class="btn btn-primary">Cadastre-se</button>
                </form>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Iniciar Sessão</h2>
                <form action="dados.php" method="POST" class="form">
                    <label class="label-input" for="Usuario">
                        <i class="fas fa-user icon-modify"></i>
                        <input type="text" placeholder="Usuario" name="ul">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="passl">
                    </label>

                    <button class="btn btn-second" type="reset">Limpar dados</button>
                    <button class="btn btn-third" type="submit">Entrar</button>
                </form>
            </div>
        </div>
</body>

</html>