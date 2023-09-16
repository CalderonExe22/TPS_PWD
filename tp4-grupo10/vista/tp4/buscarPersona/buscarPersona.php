<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

?>

    
    <div class="container d-flex justify-content-center aling-items-center p-5">
        <form class="needs-validation" id="formulario" method="get" action="../action/accionBuscarPersona.php" novalidate>

            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center aling-text-center">
                    <h2>Buscar Persona</h2>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <label for="NroDni">Nro dni:</label>
                    <input class="form-control" id="NroDni" name="NroDni" type="number" required>
                    <span id="dnino"></span>
                </div>                              
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <input class="btn btn-success" id="enviar" type="submit">
                    <input class="btn btn-dark" type="reset" value="Limpiar">
                </div>
            </div>

        </form>
    </div>
<script src="../js/buscarPersona.js"></script>
<script src="../js/validacionBootstrap.js"></script>

<?php
include_once("../../menu/pie.php")
?>