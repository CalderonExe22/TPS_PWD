<?php 
$ruta_base="../../../../";
include_once "../../../../menu/cabecera.php";
?>

    <?php include_once("../Control/resultado.php");

        echo "<h2>Precio : ".mostrarPrecio().".</h2>
        <br><a href='../Vista/punto5.php'><button class='btn btn-primary'>Volver</button></a>";

    ?>
<?php include_once "../../../../menu/pie.php";?>
