<?php 
$ruta_base="../../../../";
include_once "../../../../menu/cabecera.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>tp2 ej2</title>
</head>
<body>
    
    <?php include_once("../Control/validacion.php");

        $sum = mostrarCarga();

        echo "<h2>El total de carga horaria semanal es : ".$sum."</h2>";
        echo "<br/><h2><a class='volver' href='../Vista/punto2.php'>Volver</a></h2>";

    ?>
<?php include_once "../../../../menu/pie.php";?>
</body>
</html>