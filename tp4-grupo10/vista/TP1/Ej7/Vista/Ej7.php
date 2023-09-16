<?php 
$ruta_base="../../../";
include_once "../../../menu/cabecera.php";

?>

    <form name="form" id="form" method="post" action="../action/mostrarResultado.php">
        <input name="text1" id="text1" type="number" required>
        <input name="text2" id="text2" type="number" required>
        <select name="select" id="select">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <button  type="submit">Calcular</button>
    </form>
    <div>


<?php include_once "../../../menu/pie.php";?>