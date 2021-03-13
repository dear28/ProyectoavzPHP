<?php
    if(!empty($_POST)){
        $alert="";
        if(empty($_POST['modelo']) || empty($_POST['nombre']) || empty($_POST['memoria']) || 
        empty($_POST['resolucion']) || empty($_POST['precio'])){
            $alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
        }else{
            include "conexion/open.php";

            $mode = $_POST['modelo'];
            $nom = $_POST['nombre'];
            $memo = $_POST['memoria'];
            $resol = $_POST['resolucion'];
            $prec = $_POST['precio'];

            $query = Mysqli_query($conexion, "SELECT*FROM $tb4 where modelo_ip='$mode' OR nombre_ip='$nom'");
            $result = mysqli_fetch_array($query);

            if($result > 0)
            {
            $alert='<p class="msg_error">El producto ya existe.</p>';
            }else{
                $query_insert = Mysqli_query($conexion,"INSERT INTO $tb4 (modelo_ip, nombre_ip, memoria_ip, resolucion_ip, precio_ip) VALUES ('$mode', '$nom', '$memo', '$resol', '$prec')");

                if($query_insert)
                {
                    $alert='<p class="msg_save">Producto ingresado correctamente.</p>';
                }else
				{
                	$alert='<p class="msg_error">Error al ingresar el producto.</p>';
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
	<?php include "enlaces/head.php"; ?>
	<title>TECtop</title>
</head>
<body>
<?php include "enlaces/nav.php"; ?>
	
<?php include "enlaces/carru.php"; ?>

<section class="fron" id="container">
	<div class="form_register">
        <h1>Registrar producto</h1>
        <hr>
        <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

        <form action="" method="post">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" placeholder="Modelo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <label for="memoria">Memoria</label>
            <input type="text" name="memoria" id="memoria" placeholder="Memoria">
            <label for="resolucion">Resolución</label>
            <input type="text" name="resolucion" id="resolucion" placeholder="Resolución">
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" placeholder="Precio">
            <input type="submit" value="Ingresar producto" class="btn_save">
        </form>		
	    </div>
    </div>
</section>

<?php 
include("enlaces/footer.php")
?>
<?php include("enlaces/foot.php")
?>
</body>
</html>