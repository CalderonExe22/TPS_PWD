<?php
$ruta_base="../../../";
include_once "../../../menu/cabecera.php";

?>

    
    <?php include_once("../Control/calculaprecio.php");

        echo "<h2>El precio es de : ".mostrarPrecio().".</h2>";
        echo "<h2><a href='../Vista/Ej8.php'><input type='button' value='Volver'></h2>";

    ?>
<?php include_once "../../../menu/pie.php";?>
