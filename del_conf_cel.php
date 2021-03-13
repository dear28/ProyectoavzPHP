<?php

include "conexion/open.php";

    if(!empty($_POST))
    {
        $idip = $_POST['id'];
        
        echo "DELETE FROM $tb4 WHERE id_ip = '$idip'";
        $query_delete = mysqli_query($conexion, "DELETE FROM $tb4 WHERE id_ip = '$idip'");

        if($query_delete)
        {
            header('location: lista_cel.php');
        }else{
            echo "Error al eliminar";
        }

    }
    if(empty($_REQUEST['id']))
    {
        header('location: lista_cel.php');
    }else
    {
        $idip = $_REQUEST['id'];

        $query = Mysqli_query($conexion,"SELECT modelo_ip, nombre_ip FROM $tb4 WHERE id_ip = $idip");

        $result = mysqli_num_rows($query);
        if($result > 0)
        {
            while ($data = mysqli_fetch_array($query)){
                $modelo = $data['modelo_ip'];
                $nombre = $data['nombre_ip']; 
            }            
        }else
        {
            header('location: lista_cel.php');
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
        <div class="data_delete">
            <h2>¿Está seguro de eliminar el siguiente producto?</h2>
            <p>Modelo: <span><?php echo $modelo; ?></span></p>
            <p>Nombre: <span><?php echo $nombre; ?></span></p>

            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $idip; ?>">
                <a href="lista_cel.php" class="btn_cancel">Cancelar</a>
                <input type="submit" value="Aceptar" class="btn_ok">
            </form>
        </div> 
</section>

<?php 
include("enlaces/footer.php")
?>
<?php include("enlaces/foot.php")
?>
</body>
</html>