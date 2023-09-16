<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

?>
    
    <div class="container d-flex justify-content-center aling-items-center">
        <form id="formulario" class="m-4 needs-validation" action="../action/accionNuevaPersona.php" method="post" novalidate>
            
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center text-aling-center">
                    <h2>Ingresar Una persona</h2>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <label for="NroDni">Numero Dni:</label>
                    <input class="form-control" id="NroDni" name="NroDni" type="number" minlength="8" required>                  
                    <span id="dnino"></span>
                </div>
                <div class="col-6">
                    <label for="Apellido">Apellido</label>
                    <input class="form-control" id="Apellido" name="Apellido" type="text" required>
                    <span id="apellidono"></span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <label for="Nombre">Nombre:</label>
                    <input class="form-control" id="Nombre" name="Nombre" type="text" required>
                    <span id="nombreno"></span>
                </div>
                <div class="col-6">
                    <label for="FechaNac">Fecha de Nacimiento:</label>
                    <input class="form-control" id="FechaNac" name="fechaNac" type="date" min="1900-01-01" required>
                    <span id="fechano"></span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <label for="Telefono">Telefono:</label>
                    <input class="form-control" id="Telefono" name="Telefono" type="number" required>
                    <span id="telefonono"></span>
                </div>
                <div class="col-6">
                    <label for="Domicilio">Domicilio:</label>
                    <input class="form-control" id="Domicilio" name="Domicilio" type="text" required>
                    <span id="domiciliono"></span>
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
    <script src="../js/validacionBootstrap.js"></script>
    <script src="../js/nuevaPersona.js"></script>
</body>
</html>

<?php
include_once("../../menu/pie.php")
?>