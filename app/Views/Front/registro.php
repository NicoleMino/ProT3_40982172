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
<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form') ?>">
  <?= csrf_field(); ?>

  <?php if (!empty(session()->getFlashdata('fail'))) : ?>
    <div class="alert alert-danger"><?= session()->getFlasdata('fail'); ?></div>
  <?php endif ?>
  <?php if (!empty(session()->getFlashdata('success'))) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
  <?php endif ?>
  <div class="card mb-3 mt-3">
    <div class="card-body">
      <h5 class="card-title">Registrarse</h5>
      <form>
        <div class="mb-3">
          <label for="registroNombre" class="form-label">Nombre</label>
          <input name="nombre" type="text" class="form-control" placeholder="nombre">
          <!--error-->
          <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="registroApellido" class="form-label">Apellido</label>
          <input name="apellido" type="text" class="form-control" placeholder="apellido">
          <!--error-->
          <?php if ($validation->getError('apellido')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="registroEmail" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="email">
          <!--error-->
          <?php if ($validation->getError('email')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="registroUsuario" class="form-label">Usuario</label>
          <input type="text" name="usuario" class="form-control" placeholder="usuario">
          <!--error-->
          <?php if ($validation->getError('usuario')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="registroPassword" class="form-label">Contraseña</label>
          <input type="password" name="pass" class="form-control" placeholder="password">
          <!--error-->
          <?php if ($validation->getError('password')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('password'); ?>
            </div>
          <?php } ?>
          <p>Su contraseña debe tener al menos 5 caracteres.</p>
        </div>
        <input type="submit" value="Guardar" class="btn btn-success">
        <input type="reset" value="Cancelar" class="btn btn-danger">
      </form>
    </div>
  </div>
</form>
</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMN27nqpvuI6V66xLHRJnhpP0ihf0bV1wB7GQ2sqXWPMxwG+3Q99j6yYJwlBN3nG" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4Ag2cFI8jBxkzZkQ0J3Q6ezy6iL+CWf0p4Y04sIHwIvMPLZeI27h" crossorigin="anonymous"></script>