<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #87CEEB;
            /* color de fondo del body */
            background-repeat: no-repeat;
            background-size: 100% 75%;
            padding-top: 20px;
            /* Añade un espacio superior */
        }

        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            /* Ajusta la altura del contenedor según sea necesario */
        }

        .video-fluid {
            max-width: 100%;
            height: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            /* Añade margen inferior */
        }
    </style>
</head>

<body>
    <h2><b>Aquí encontrarás dos cuentos:</b> "LA HORMIGA".</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="video-container">
                    <video class="video-fluid" muted controls>
                        <source src="assets/videos/EL CUENTO DE LA HORMIGA.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!--  Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMN27nqpvuI6V66xLHRJnhpP0ihf0bV1wB7GQ2sqXWPMxwG+3Q99j6yYJwlBN3nG" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4Ag2cFI8jBxkzZkQ0J3Q6ezy6iL+CWf0p4Y04sIHwIvMPLZeI27h" crossorigin="anonymous"></script>
</body>

</html>