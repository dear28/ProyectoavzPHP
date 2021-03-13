<?php 
session_start();

if(empty($_SESSION['active']))
{
  header("location: load.php");
}
?>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
    	        <img src="img/giro.png" alt="" width="30" height="24" class="d-inline-block align-top">TECtop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="menu.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="we.php">Acerca de Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Celulares</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="registro_cel.php">Insertar celulares</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="lista_cel.php">Lista de celulares</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Colombia, <?php echo fechaC(); ?></a>
                    <a class="btn btn-outline-success" href="salir.php" role="button">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </nav>
</header>