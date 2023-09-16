
<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

$persona = new AbmPersona();

$listarPersonas = $persona->buscarPers(null);

?>



    <div class="container p-3">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-align-center"><h2 class="text-primary">Datos Personas</h2></div>

                <?php

                    if(count($listarPersonas) > 0){
                        for($i = 0; $i < count($listarPersonas); $i++){
                            
                            $dniEnviar = $listarPersonas[$i]->get_nroDni();
                            echo
                            "<div class='block-datos col-12 mt-5 p-3'>                           
                                <p><b>Dni:</b> ".$listarPersonas[$i]->get_nroDni()."</p>
                                <p><b>Nombre:</b> ".$listarPersonas[$i]->get_nombre()."</p>
                                <p><b>Apellido:</b> ".$listarPersonas[$i]->get_apellido()."</p>
                                <p><b>Fecha de nacimiento:</b> ".$listarPersonas[$i]->get_fechaNac()."</p>
                                <p><b>Telefono:</b> ".$listarPersonas[$i]->get_telefono()."</p>
                                <p><b>Domicilio:</b> ".$listarPersonas[$i]->get_domicilio()."</p>
                                <p><a href='../autosPersona/autosPersona.php?DniDuenio=".$dniEnviar."'><b> Ver autos </b></a></p>
                            </div>";

                        }
                    }else{
                        echo "<div class='col-12 text-danger'><h1>No hay autos cargados en la base de datos</h1></div>";
                    }

                ?>

            </div>
        </div>

    </div>


    <?php
include_once("../../menu/pie.php")
?>