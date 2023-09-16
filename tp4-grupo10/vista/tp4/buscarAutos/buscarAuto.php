<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

?>


    <div class="container-fluid d-flex justify-content-center align-items-center p-5">
        
        <div id="formulario" class="row">
            <div class="col-12 d-flex justify-content-center text-align-center mb-5">
                <h1>Buscar automovil</h1>
            </div>
            
            <form class="col-12 p-3 needs-validation" id="form_patente" method="get" action="../action/accionBuscarAuto.php" novalidate>
                <label for="patente"><b>Ingrese patente:</b></label>
                <input class="form-control mt-3"" id="patente" name="Patente" type="text" minlength="6" required>
                <span id="alert"></span><br>
                <input class="btn btn-success mt-3" id="enviar" type="submit" value="buscar">
                <input class="btn btn-dark mt-3" type="reset">
            </form>
            
        </div>

    </div>
    
    <script src="../js/buscarAuto.js"></script>

    <script src="../js/validacionBootstrap.js"></script>

    <?php
include_once("../../menu/pie.php")
?>