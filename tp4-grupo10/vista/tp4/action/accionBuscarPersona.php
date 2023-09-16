<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

$datos = encapsulamientoEnvio();
$objAbmPersona = new AbmPersona(); 

$buscarPersona["NroDni"] = $datos["NroDni"];

$resultadoPersona = $objAbmPersona->buscarPers($buscarPersona);
$rta = null;

if(count($resultadoPersona) > 0){
    $rta = true;
}else{
    $rta = false;
}

?>


    <div class="container d-flex justify-content-center aling-text-center">
            <?php

                if(!$rta){

                    echo 
                    "<div class='row mt-5'>
                        <div class='cartel col-12 d-flex justify-content-center aling-text-center'>
                            <h2>No se encontro a la persona con ese dni.</h2>
                        </div>
                        <div class='col-12'>
                            <input type='button' class='mt-4 btn btn-primary' onclick='javascript: history.go(-1)' value='Volver'></input>
                        </div>
                    </div>";
                    
                }else{

                    echo
                    '<form id="formulario" class="m-4 needs-validation" action="actualizarDatosPersonas.php" method="post" novalidate>
            
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center text-aling-center">
                                <h2>Actualizar Una persona</h2>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <label for="NroDni">Numero Dni:</label>
                                <input class="form-control" id="NroDni" name="NroDni" type="number" minlength="8" value='.$resultadoPersona[0]->get_nroDni().' readonly required>                  
                                <span id="dnino"></span>
                            </div>
                            <div class="col-6">
                                <label for="Apellido">Apellido</label>
                                <input class="form-control" id="Apellido" name="Apellido" type="text" value='.$resultadoPersona[0]->get_apellido().' required>
                                <span id="apellidono"></span>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <label for="Nombre">Nombre:</label>
                                <input class="form-control" id="Nombre" name="Nombre" type="text" value='.$resultadoPersona[0]->get_nombre().' required>
                                <span id="nombreno"></span>
                            </div>
                            <div class="col-6">
                                <label for="FechaNac">Fecha de Nacimiento:</label>
                                <input class="form-control" id="fechaNac" name="fechaNac" type="date" min="1900-01-01" value='.$resultadoPersona[0]->get_fechaNac().' required>
                                <span id="fechano"></span>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <label for="Telefono">Telefono:</label>
                                <input class="form-control" id="Telefono" name="Telefono" type="number" value='.$resultadoPersona[0]->get_telefono().' required>
                                <span id="telefonono"></span>
                            </div>
                            <div class="col-6">
                                <label for="Domicilio">Domicilio:</label>
                                <input class="form-control" id="Domicilio" name="Domicilio" type="text" value='.$resultadoPersona[0]->get_domicilio().' required>
                                <span id="domiciliono"></span>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col">
                                <input class="btn btn-success" id="enviar" type="submit" value="Enviar para actualizar">
                                <input type="button" class="btn btn-dark" id="limpiar" value="Limpiar">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <input type="button" class="mt-4 btn btn-light"" onclick="javascript: history.go(-1)" value="Volver"></input>
                            </div>
                        </div>
            
                    </form>';

                }

            ?>
    </div>

    <script src="../js/accionBuscarPersona.js"></script>
    <script src="../js/validacionBootstrap.js"></script>
    <?php
include_once("../../menu/pie.php")
?>