<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel centrado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body {
            background-image: url('assets/img/pizzarra.png');
            /* imagen de fondo del body */
            background-repeat: no-repeat;
            background-size: 100% 75%;
        }

        .carousel {
            margin-top: 20px;
            /* Ajusta el margen superior según sea necesario */
        }
    </style>
</head>

<body>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <br>
                <h2>¿Por qué es importante la educación en los niños?</h2>
                <br>
                <p>La educación en la primaria es fundamental por varias razones, ya que sienta las bases para el desarrollo integral de los niños y tiene un impacto significativo en su futuro. <br><br>
                    La educación es como una llave mágica que nos ayuda a abrir puertas emocionantes y descubrir un mundo lleno de posibilidades. Imagina que eres un aventurero y la educación es tu mapa para explorar lugares asombrosos. A través de la lectura, aprendemos a viajar a tierras lejanas sin movernos de nuestro asiento. Al escribir, creamos nuestro propio diario de aventuras, compartiendo historias únicas que solo nosotros podemos contar.
                    Pero la educación no solo es sobre números y letras; también es sobre aprender a trabajar en equipo, a ser buenos amigos y a entender que todos somos diferentes, pero igualmente valiosos. Es como construir un puente que conecta a todas las personas del mundo. A medida que aprendemos, ese puente se vuelve más fuerte y más grande, permitiéndonos comunicarnos y comprendernos mejor.<br>
                    Así que, niños, <b>la educación es como un tesoro que llevamos dentro</b>.
                    Nos ayuda a crecer, a ser fuertes y a ser capaces de enfrentar cualquier desafío. Cada día en la escuela
                    es una nueva página en nuestro libro de vida, ¡y qué emocionante es llenar esas páginas con conocimientos, amistades y aventuras!</p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/12.jpg" class="d-block w-60" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/11.jpg" class="d-block w-60" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/22.jpg" class="d-block w-60" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts al final del cuerpo -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMN27nqpvuI6V66xLHRJnhpP0ihf0bV1wB7GQ2sqXWPMxwG+3Q99j6yYJwlBN3nG" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4Ag2cFI8jBxkzZkQ0J3Q6ezy6iL+CWf0p4Y04sIHwIvMPLZeI27h" crossorigin="anonymous"></script>
</body>

</html>