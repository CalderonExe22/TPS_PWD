<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

$datos = encapsulamientoEnvio();

$objAbmPersona = new AbmPersona();

$resultado = $objAbmPersona->modificarPers($datos);

?>

    
    <div class="container">

        <div class="row d-flex justify-content-center aling-items-center p-5">
            <div class="col-12 d-flex justify-content-center aling-text-center p-5">
                <?php

                    if($resultado == true){
                        echo '<h2 class="cartel">Se actualizo correctamente</h2>';
                    }else{
                        echo '<h2 class="cartel">No se pudo actualizar a la persona correctamente</h2>';
                    }
                
                ?>
            </div>
            <div class="col-12 d-flex justify-content-center aling-text-center">
                <input type="button" class="mt-1 btn btn-primary" onclick="javascript: history.go(-1)" value="Volver"></input>
            </div>
        </div>

    </div>


    <?php
include_once("../../menu/pie.php")
?>