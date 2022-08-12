<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="./css/style-login.css" rel="stylesheet">
</head>

<body>
    <h1>Lycooper</h1>
    <div class="container-main-login">
        <div class="container-left">
            <div class="page-register">
                <h1>Já tem uma conta?</h1>
                <h3>Faça seu Login abaixo!</h3>
                <form action="./login.html" method="post">
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
        <div class="container-right">
            <div class="page-login">
                <h1>Faça seu cadastro abaixo:</h1>
                <form action="./php/recebedados.php" method="POST" class="form-login">
                    <div class="textfield">
                        <label class="label" for="user">Usuário</label>
                        <input type="text" placeholder="Usuário" name="userLogin">
                    </div>
                    <div class="textfield">
                        <label class="label" for="email">Email</label>
                        <input type="password" placeholder="example@example.com" name="userEmail">
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