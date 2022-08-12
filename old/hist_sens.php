<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lycooper</title>
    <link rel="stylesheet" href="./css/style_hist.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="/">Lycooper</a>
            <ul class="nav-list">
                <li><a href="sistema.html">Home</a></li>
                <li><a href="sensor.html">Sensores</a></li>
                <li><a href="hist_sens.html">Histórico de Coleta</a></li>
            </ul>
        </nav>
    </header>
    <main>
            <form action="dados.php" name="f_colet" class="f_colet">
                <strong>Marque a data da coleta de dados:</strong>
                <input type="date" name="date"><br>
                <strong>Selecione o ciclo:</strong>
                <select name="Ciclo">
                    <option value="C1">Ciclo 1</option>
                    <option value="C2">Ciclo 2</option>
                </select>
            </form>
    </main>
</body>

</html>