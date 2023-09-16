
<?php 
$ruta_base="../../../../";
include_once "../../../../menu/cabecera.php";
?>

    
    <?php include_once("../Control/resultado.php");

        echo "<h1>".ejecutarOperacion()."</h1>";

        echo "<br><a href='../Vista/punto4.php'><button class='btn btn-primary'>Volver</button></a>";

    ?>
<?php include_once "../../../../menu/pie.php";?>
