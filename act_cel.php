<?php

    include "conexion/open.php";

    if(!empty($_POST))
    {
        $alert="";
        if(empty($_POST['modelo']) || empty($_POST['nombre']) || empty($_POST['memoria']) || 
        empty($_POST['resolucion']) || empty($_POST['precio'])){
            $alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
        }else{
            
            $idip = $_POST['idip'];
            $mode = $_POST['modelo'];
            $nom = $_POST['nombre'];
            $memo = $_POST['memoria'];
            $resol = $_POST['resolucion'];
            $prec = $_POST['precio'];

            $query = Mysqli_query($conexion, "SELECT*FROM $tb4 WHERE (modelo_ip = '$mode' AND id_ip != '$idip') OR (nombre_ip = '$nom' AND id_ip != '$idip')");

            $result = mysqli_fetch_array($query);

            if($result > 0)
            {
            $alert='<p class="msg_error">El producto ya existe.</p>';
            }else{

                if(empty($_POST['precio']))
                {
                    $sql_update = mysqli_query($conexion, "UPDATE $tb4 SET modelo_ip = '$mode', nombre_ip = '$nom', memoria_ip = '$memo', resolucion_ip = '$resol' WHERE id_ip = '$idip'");
                }else{
                    $sql_update = mysqli_query($conexion, "UPDATE $tb4 SET modelo_ip = '$mode', nombre_ip = '$nom', memoria_ip = '$memo', resolucion_ip = '$resol', precio_ip = '$prec' WHERE id_ip = '$idip'");
                }

                if($sql_update)
                {
                    $alert='<p class="msg_save">Producto actualizado correctamente.</p>';
                }else{
                $alert='<p class="msg_error">Error al actualizar el producto.</p>';
                }
            }
        }
    }

    //Mostrar datos
    if(empty($_GET['id']))
    {
        header('location: lista_cel.php');
    }
    $idip = $_GET['id'];

    $sql=Mysqli_query($conexion,"SELECT*FROM $tb4 WHERE id_ip = $idip");

    $result_sql = mysqli_num_rows($sql);
    if($result_sql == 0)
    {
        header('location: lista_cel.php');
    }else{
        while ($data = mysqli_fetch_array($sql)){

        $idip  = $data['id_ip'];
        $model = $data['modelo_ip'];
        $nom   = $data['nombre_ip'];
        $memo  = $data['memoria_ip'];
        $resol = $data['resolucion_ip'];
        $prec  = $data['precio_ip'];
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
        <h1>Actualizar producto</h1>
        <hr>
        <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

        <form action="" method="post">
            <input type="hidden" name="idip" value="<?php echo $idip; ?>">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" placeholder="Modelo" value="<?php echo $model; ?>">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $nom; ?>">
            <label for="memoria">Memoria</label>
            <input type="text" name="memoria" id="memoria" placeholder="Memoria" value="<?php echo $memo; ?>">
            <label for="resolucion">Resolución</label>
            <input type="text" name="resolucion" id="resolucion" placeholder="Resolución" value="<?php echo $resol; ?>">
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" placeholder="Precio" value="<?php echo $prec; ?>">
            <input type="submit" value="Actualizar producto" class="btn_save">
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