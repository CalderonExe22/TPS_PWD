<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");


    $autos = new AbmAuto();
    
    $verAutos = $autos->buscarAuto(null);//coleccion

?>

    
    <div class="container p-3">
        <div class="row">
            
                <?php
                    if(count($verAutos) > 0){
                        for($i = 0; $i < count($verAutos); $i++){

                            $duenio = $verAutos[$i]->get_objDuenio();
                            
                            echo
                            "
                            
                            <div class='block-datos col-6 mt-5 p-3'>   
                                <div class='mb-5 d-flex justify-content-center text-align-center'><h2>Datos del vehiculo</h2></div>                        
                                <p><b>Patente:</b> ".$verAutos[$i]->get_patente()."</p>
                                <p><b>Marca:</b> ".$verAutos[$i]->get_marca()."</p>
                                <p><b>Modelo:</b> ".$verAutos[$i]->get_modelo()."</p>
                            </div>

                            <div class='block-datos col-6 mt-5 p-3'>
                                <div class='mb-5 d-flex justify-content-center text-align-center'><h2>Datos del propietario</h2></div>
                                <p><b>Nombre:</b> ".$duenio->get_nombre()."</p>
                                <p><b>Apellido:</b> ".$duenio->get_apellido()."</p>
                            </div>";

                        }
                    }else{
                        echo "<div class='mt-5 cartel col-12 d-flex justify-content-center text-align-center'><h2>No hay autos cargados en la base de datos</h2></div>";
                    }

                ?>
            </div>

        </div>
    </div>


<?php
include_once("../../menu/pie.php")
?>