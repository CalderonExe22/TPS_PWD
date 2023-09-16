
<?php 
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

    $datosArray = encapsulamientoEnvio();
    $objTransf = new AbmAuto();

    $busqueda = $objTransf->buscarAuto($datosArray);

?>



        <div id="resultado" class="container-fluid p-4 mt-5">
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center align-items-center">
                <h1>Resultado de la Busqueda</h1>
                </div>
                
            </div> 
            <div class="row mt-4">

                <div class="col-12 d-flex justify-content-center align-items-center">
                <table>
                        <?php
                            
                            if(count($busqueda) > 0){
                                $datosDuenio = $busqueda[0]->get_objDuenio();
                                echo "
                                <tr><th colspan='9'><h2>Datos Vehiculo</h2></th></tr>
                                <tr><th>Patente</th> <th>Marca</th> <th>Modelo</th> <th>Dni</th><th>Nombre</th><th>Apellido</th><th>Fecha nacimiento</th><th>Telefono</th><th>Domicilio</th> </tr>
                                <tr><td>".$busqueda[0]->get_patente()."</td> <td>".$busqueda[0]->get_modelo()."</td> <td>".$busqueda[0]->get_marca()."</td><td>".$datosDuenio->get_nroDni()."</td><td>".$datosDuenio->get_nombre()."</td><td>".$datosDuenio->get_apellido()."</td><td>".$datosDuenio->get_fechaNac()."</td><td>".$datosDuenio->get_telefono()."</td><td>".$datosDuenio->get_domicilio()."</td></tr>";

                            }else{
                                echo "<h1 class='text-danger'>No se encontro ningun automovil cargado con ese numero de patente</h1>";
                            }

                        ?>
                    </table>
                </div>

                
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="button" class="mt-4 btn btn-light"" onclick="javascript: history.go(-1)" value="Volver"></input>
                </div>
            </div>

        </div>

        <?php
include_once("../../menu/pie.php")
?>