<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>
<!-- navegación -->
<nav class="navbar navbar-expand-sm bg-info navbar-dark">
    <a class="navbar-brand" href="<?php echo base_url('principal'); ?>">
        <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="75" alt="" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php if (session()->perfil_id == 1) : ?>
        <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">Admin: <?php echo session('nombre'); ?></a>
        </div>
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="nabvarTogglerDemo03">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="registro">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
                </li>
            </ul>
        <?php elseif (session()->perfil_id == 2) : ?>
            <div class="btn btn-info active btnUser btn-sm">
                <a href="">Cliente: <?php echo session('nombre'); ?></a>
            </div>
            <a class="navbar-brand" href="#"></a>
            < class="collapse navbar-collapse" id="nabvarTogglerDemo03">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca_de">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
                    </li>
                </ul>
            <?php else : ?><!-- navbar para clientes no logueados -->
                <a class="navbar-brand" href="#"></a>
                <div class="collapse navbar-collapse" id="nabvarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="principal">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acerca_de">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro">Registrarse</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Más
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Cuentos">Cuentos</a>
                                <a class="dropdown-item" href="Juego">Juegos</a>
                            </div>
                        </li>
                    </ul>
                    <style>
                        .search-form {
                            position: absolute;
                            right: 20px;
                            top: 10px;
                        }

                        .navbar {
                            position: relative;
                        }
                    </style>
                    <form class="form-inline ml-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                <?php endif; ?>
                </div>
</nav>