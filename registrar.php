<?php
    if(!empty($_POST))
    {
      $alert="";
      if(empty($_POST['usuario']) || empty($_POST['nombre']) || empty($_POST['apellido']) || 
      empty($_POST['telefono']) || empty($_POST['correo']) || empty($_POST['contraseña'])){
          $alert='Todos los campos son obligatorios.';
      }else{
      include "conexion/open.php";

      $usuario=$_POST['usuario'];
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $telefono=$_POST['telefono'];
      $correo=$_POST['correo'];
      $contraseña=($_POST['contraseña']);

      $query = Mysqli_query($conexion, "SELECT*FROM $tb1 where usu='$usuario'");
      $result = mysqli_fetch_array($query);

      if($result > 0)
      {
        $alert='El usuario ya existe.';
      }else{
      $query_insert = Mysqli_query($conexion,"INSERT INTO $tb1 (usu, pass, nombre, apellido, telefono, email) 
      VALUES ('$usuario', '$contraseña', '$nombre', '$apellido', '$telefono', '$correo')");

      if($query_insert)
      {
        $alert = "Registro exitóso";
      }else{
        $alert = "Error en el registro. Vuelve a intentarlo.";
      }         
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/27a1acd5ae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="css/foot.css">
	<title>TECtop</title>
</head>
<body>
  <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
      <div class="modal-content">
        <div class="col-12 user-img">
        <img src="img/giro.png">
        </div>
        <form action="" method="post" class="col-12">
          <div class="form-group" id="user-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="ID de Usuario" aria-label="Username" aria-describedby="basic-addon1" name="usuario">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-font"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" name="nombre">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-bold"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1" name="apellido">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Teléfono" aria-label="Username" aria-describedby="basic-addon1" name="telefono">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Username" aria-describedby="basic-addon1" name="correo">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" name="contraseña">
            </div>
            <div class="alert"><h5 style="text-align:center; font-size: 18px; color: #FFFFFF;"><?php echo isset($alert) ? $alert : '';?></div>
            <div>
              <button type="submit" class="btn btn-primary"><i class="fas fa-database"></i>  Registrar </button>
              <a class="btn btn-primary" href="load.php" role="button"><i class="fas fa-sign-in-alt"></i>  Ingresar</a>
            </div>
        </form>
          </div>
      </div>
    </div>
  </div>
  <?php
include("enlaces/footer.php")
?>
<?php include("enlaces/foot.php")
?>
</body>
</html>