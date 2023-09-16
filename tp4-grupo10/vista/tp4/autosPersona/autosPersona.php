
<?php 
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

    $autoSeleccionado = encapsulamientoEnvio();
    $autos = new AbmAuto();
    
    $verAutos = $autos->buscarAuto($autoSeleccionado);//coleccion

?>

    
    <div class="container p-3">
        <div class="row d-flex justify-content-center text-align-center"">
            
                <?php
                    if(count($verAutos) > 0){
                        echo '<div class="col-6 d-flex justify-content-center text-align-center"><h2 class="text-primary">Datos del vehiculo</h2></div><div class="col-6 d-flex justify-content-center text-align-center"><h2 class="text-primary">Datos del propietario</h2></div>';
                        for($i = 0; $i < count($verAutos); $i++){                           
                            $duenio = $verAutos[$i]->get_objDuenio();
                            
                            echo
                            "<div class='block-datos col-6 mt-5 p-3'>                           
                                <p><b>Patente:</b> ".$verAutos[$i]->get_patente()."</p>
                                <p><b>Marca:</b> ".$verAutos[$i]->get_marca()."</p>
                                <p><b>Modelo:</b> ".$verAutos[$i]->get_modelo()."</p>
                            </div>

                            <div class='block-datos col-6 mt-5 p-3'>
                                <p><b>Dni:</b> ".$duenio->get_nroDni()."</p>
                                <p><b>Nombre:</b> ".$duenio->get_nombre()."</p>
                                <p><b>Apellido:</b> ".$duenio->get_apellido()."</p>
                                <p><b>Fecha de nacimiento:</b> ".$duenio->get_fechaNac()."</p>
                                <p><b>Telefono:</b> ".$duenio->get_telefono()."</p>
                                <p><b>Domicilio:</b> ".$duenio->get_domicilio()."</p>
                            </div>"
                            
                            ;

                        }
                    }else{
                        echo "<div class='cartel col-12 d-flex justify-content-center text-align-center'><h2>No hay autos cargados en la base de datos</h2></div>";
                                       
                    }

                ?>
            </div>

        </div>
            <div class='row'>
                <div class='col-12 d-flex justify-content-center text-align-center'>
                    <input type='button' class='mt-4 btn btn-primary' onclick='javascript: history.go(-1)' value='Volver'></input>
                </div>
            </div>
    </div>


    <?php
include_once("../../menu/pie.php")
?>