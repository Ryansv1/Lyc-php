<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Lycooper</title>
</head>

<header>
<?php

require('partials/navbar.php');

?>
</header>

<body>
    <!-- 1° Section, Titulo e Botão Read me e Showcase -->
    <section id="showcase" class="grid">
        <div class="bg-image"></div>
        <div class="content-wrap">
            <h1>Bem-vindo ao Lycooper!</h1>
            <p>Sinta-se a vontade para utilizar das ferramentas disponíveis em seu menu acima!</p>
            <a href="#section-b" class="btn">Read More</a>
        </div>
    </section>
    <!-- Fim da 1° Section, Titulo e Botão Read me e Showcase -->

    <main id="main">
        <!-- Texto acima do Slide, Section A -->
        <section id="section-a" class="grid container-fluid">
            <div class="content-wrap">
                <h2 class="content-title">Sobre o Sistema:</h2>
                    <div class="content-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint eligendi possimus? Unde
                        officiis magnam laborum ipsa distinctio odio, vero dolores dicta aliquam aperiam repellendus.
                        Perferendis officiis deserunt velit voluptas nobis sequi
                        animi totam, accusantium, ex eius quia, natus quo?</p>
                    </div>
            </div>
        </section>
        <!-- Texto abaixo do Slide, Section A -->
        <section>
          <div id="carouselExampleDark" class="carousel carousel-dark slide m-auto py-4 w-75" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="imgs/a.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Legenda foto</h5>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="imgs/b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Legenda foto</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imgs/c.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Legenda foto</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        </main>
    <!-- Footer -->
    <footer id="main-footer" class="text-footer text-center footer">
        <div id="footer-brand">Lycooper</div>
    </footer>
</body>
</html>