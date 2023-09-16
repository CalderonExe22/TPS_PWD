<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

?>

    
    <div class="container d-flex justify-content-center aling-items-center">

        <form id="formulario" class="m-4 needs-validation" action="../action/accionNuevoAuto.php" method="post" novalidate>
            
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center text-aling-center">
                    <h2>Ingresar Una auto</h2>
                </div>
                
            </div>

            <div class="row mt-4">
                <div class="col-6">
                    <label for="Patente">Patente:</label>
                    <input class="form-control" id="Patente" name="Patente" type="text" required>
                    <span id="patenteno"></span>
                </div>

                <div class="col-6">
                    <label for="Marca">Marca:</label>
                    <input class="form-control" id="Marca" name="Marca" type="text" required>
                    <span id="marcano"></span>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-6">
                    <label for="Modelo">Modelo:</label>
                    <input class="form-control" id="Modelo" name="Modelo" type="number" min="1900" required>
                    <span id="modelono"></span>
                </div>
                
                <div class="col-6">
                    <label for="DniDuenio">Dni del dueño:</label>
                    <input class="form-control" id="DniDuenio" name="DniDuenio" type="number" required>
                    <span id="dnino"></span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <input class="btn btn-success" id="enviar" type="submit">
                    <input class="btn btn-dark" type="reset" value="Limpiar">
                </div>
            </div>

        </form>

    </div>
    
<script src="../js/nuevoAuto.js"></script>
<script src="../js/validacionBootstrap.js"></script>

<?php
include_once("../../menu/pie.php")
?>