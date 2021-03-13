<?php
    include("conexion/open.php")
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
    <h1>Lista de productos</h1>
    <a href="registro_cel.php" class="btn_new">Registrar producto</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Nombre</th>
            <th>Memoria</th>
            <th>Resolución</th>
            <th>Precio</th>
            <th>Acción</th>
        </tr>
        <?php
        $query = Mysqli_query($conexion, "SELECT*FROM $tb4");
        
        $result = mysqli_num_rows($query);
        if($result > 0){

            while($data = mysqli_fetch_array($query)){

        ?>
        <tr>
            <td><?php echo $data['id_ip']?></td>
            <td><?php echo $data['modelo_ip']?></td>
            <td><?php echo $data['nombre_ip']?></td>
            <td><?php echo $data['memoria_ip']?></td>
            <td><?php echo $data['resolucion_ip']?></td>
            <td><?php echo $data['precio_ip']?></td>
            <td>
                <a class="link_edit" href="act_cel.php?id=<?php echo $data['id_ip']?>">Editar</a>
                |
                <a class="link_delete" href="del_conf_cel.php?id=<?php echo $data['id_ip']?>">Eliminar</a>
            </td>
        </tr>

    <?php    
            }
        }
    ?>


    </table>
</section>

<?php 
include("enlaces/footer.php")
?>
<?php include("enlaces/foot.php")
?>
</body>
</html>