<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Lycooper</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style_sens.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar col- navbar-sm navbar-dark fixed-top d-inline ">
            <div class="container-fluid">
              <a class="navbar-brand brand" href="sistema.html" data-text="Lycooper">Lycooper</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"></li><a class="nav-link" href="./sistema.html">HOME</a> </li>
                    <li class="nav-item"></li><a class="nav-link" href="/sensores/sensor.html">SENSORES</a></li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <main>
    <section class="tabela-sensores py-5">
            <table class="table col-sm table-dark table-striped table-hover">
            <thead>
                    <th>Sensor</th>
                    <th>Leitura</th>
                    <th>Referência base</th>
                    <th>Status</th>
                    <th>Status sensor</th>
            </thead>
            <tbody>
                <tr style="background-color: lightgray;">
                    <td data-label="Sensor">Sensi EC</td>
                    <td data-label="Leitura">Lendo</td>
                    <td data-label="Referência base">null</td>
                    <td data-label="Status">Normal</td>
                    <td data-label="Status sensor">On</td>
                </tr>

                <tr>
                    <td data-label="Sensor">Sensi PH</td>
                    <td data-label="Leitura">Lendo</td>
                    <td data-label="Referência base">null</td>
                    <td data-label="Status">Normal</td>
                    <td data-label="Status sensor">On</td>
                </tr>

                <tr style="background-color: lightgray;">
                    <td data-label="Sensor">Sensi TA</td>
                    <td data-label="Leitura">Lendo</td>
                    <td data-label="Referência base">null</td>
                    <td data-label="Status">Normal</td>
                    <td data-label="Status sensor">On</td>
                </tr>

                <tr>
                    <td data-label="Sensor">Sensi TH20</td>
                    <td data-label="Leitura">Lendo</td>
                    <td data-label="Referência base">null</td>
                    <td data-label="Status">Normal</td>
                    <td data-label="Status sensor">On</td>
                </tr>

                <tr style="background-color: lightgray;">
                    <td data-label="Sensor">Sensi UM SOLO</td>
                    <td data-label="Leitura">Lendo</td>
                    <td data-label="Referência base">null</td>
                    <td data-label="Status">Normal</td>
                    <td data-label="Status sensor">On</td>
                </tr>
            </tbody>    
            </table>
        </section>
    </main>
</body>
</html>