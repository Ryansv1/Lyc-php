<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="./css/style-login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <h1>Lycooper</h1>
    <div class="container-main-login">
        <div class="container-left">
            <div class="page-register">
                <h1>Ainda não tem uma conta?</h1>
                <h3>Faça seu registro abaixo!</h3>
                <form action="./cadastro.html" method="post">
                    <button type="submit" class="btn btn-success">Cadastro</button>
                </form>
            </div>
        </div>
        <div class="container-right">
            <div class="page-login">
                <h1>Faça seu Login abaixo!</h1>
                <form action="./php/recebedados.php" method="POST" class="form-login">
                    <div class="textfield">
                        <label class="label" for="user">Usuário</label>
                        <input type="text" placeholder="Usuário" name="userLogin">
                    </div>
                    <div class="textfield">
                        <label class="label" for="pass">Senha</label>
                        <input type="password" placeholder="Senha" name="userPass">
                    </div>
                    <button class="btn btn-dark mt-3" type="reset">Limpar dados</button>
                    <button class="btn btn-success mt-3" type="submit" name="submit">Criar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>