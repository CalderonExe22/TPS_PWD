<?php
$ruta_base="../../../";
include_once "../../../menu/cabecera.php";

?>

    
    <?php include_once("../Control/realizarcalculo.php");



        echo "El resultado es ".ejecutarOperacion();
        echo "<h2><a href='../Vista/Ej7.php'><input type='button' value='Volver'></a></h2>";

    ?>
<?php include_once "../../../menu/pie.php";?>
