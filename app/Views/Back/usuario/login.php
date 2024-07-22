<style>
    body {
        background-color: #87CEEB;
        /* color de fondo del body */
        background-repeat: no-repeat;
    }

    .card {
        width: 400px;
        /* Ancho del formulario */
        margin: auto;
        /* Centrar horizontalmente */
        margin-top: 20px;
        /* Margen superior */
    }
</style>
<section class="container">
    <form>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Iniciar sesión</h5>
            </div>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
                    <input name="email" type="text" class="form-control" placeholder="correo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                    <input name="pass" type="password" class="form-control" placeholder="contraseña">
                </div>

                <input type="submit" value="Ingresar" class="btn btn-success">
                <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                <br><span>¿Aún no se registro? <a href="<?php echo base_url('/registro'); ?>">Registrarse aqui</a></span>

        </div>

    </form>
    </form>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMN27nqpvuI6V66xLHRJnhpP0ihf0bV1wB7GQ2sqXWPMxwG+3Q99j6yYJwlBN3nG" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4Ag2cFI8jBxkzZkQ0J3Q6ezy6iL+CWf0p4Y04sIHwIvMPLZeI27h" crossorigin="anonymous"></script>