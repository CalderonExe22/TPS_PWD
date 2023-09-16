
<?php 
$ruta_base="../../../";
include_once("../Control/calcularcarga.php");
include_once "../../../menu/cabecera.php";

    $totalCarga = cargaHoraria();

?>


    <?php
        echo "<h2>El total de horas semanales es de : ".$totalCarga."Hs.</h2>";
        echo "<br/><h2><a class='volver' href='../Vista/Ej2.php'><input type='button' value='Volver'></a></h2>";
    ?>
<?php include_once "../../../menu/pie.php";?>
