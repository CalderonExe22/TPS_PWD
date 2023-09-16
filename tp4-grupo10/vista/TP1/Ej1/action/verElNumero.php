
<?php include_once("../Control/vernumero.php");
$ruta_base="../../../";
include_once "../../../menu/cabecera.php";
    $tipoNumero = verNumero();

?>

    <?php
        echo "<h1>".$tipoNumero."</h1>";
    ?>
    
    <br/><h2><a class='link' href='../Vista/Ejercicio1.php' >Volver</a></h2>

<?php include_once "../../../menu/pie.php";?>
