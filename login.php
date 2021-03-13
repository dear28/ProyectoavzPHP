<?php
$alert = '';
session_start();

if(!empty($_SESSION['active']))
{
  header("location:menu.php");
}else{

  if(!empty($_POST))
  {
    if(empty($_POST['usuario']) || empty($_POST['contraseña']))
    {
      $alert = "Ingrese su usuario y contraseña";
    }else{
      $usuario= $_POST['usuario'];
      $contraseña= $_POST['contraseña'];

      include('conexion/open.php');

      $consulta="SELECT*FROM $tb1 where usu='$usuario' and pass='$contraseña'";
      $resultado=Mysqli_query($conexion, $consulta);
      $result=Mysqli_num_rows($resultado);

      if($result > 0){
          $data = mysqli_fetch_array($resultado);
          
          $_SESSION['active'] = true;
          header("location:menu.php");
      }else{
        $alert = "Usuario o contraseña incorrecto";
        session_destroy();
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
    <link rel="stylesheet" href="css/login.css">
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
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" name="contraseña">
            </div>
            <div class="alert"><h5 style="text-align:center; font-size: 18px; color: #FFFFFF;"><?php echo isset($alert) ? $alert : '';?></div>
            <div>
              <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
              <a class="btn btn-primary" href="registrar.php" role="button"><i class="fas fa-database"></i>  Registrarse</a>
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