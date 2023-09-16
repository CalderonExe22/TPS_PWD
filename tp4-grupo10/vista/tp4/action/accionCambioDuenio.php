<?php 
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

    $datos = encapsulamientoEnvio();
    $objAbmAuto = new AbmAuto();
    $objAbmPersona = new AbmPersona();

    $buscarPersona["NroDni"] = $datos["DniDuenio"];
    $buscarAuto["Patente"] = $datos["Patente"]; 

    $resultadoPersona = $objAbmPersona->buscarPers($buscarPersona);
    $resultadoAuto = $objAbmAuto->buscarAuto($buscarAuto);
    
    $cadena = "";

    $rta = true;

    if(count($resultadoAuto) == 0){
        $rta = false;
        $cadena = $cadena."No se encontro la patente ingresada<br>";
    }

    if(count($resultadoPersona) == 0){
        $cadena = $cadena."No se encontro a la persona ingresada.";
        $rta = false;
    }
    
    if($rta){
        $modificarDatos["Patente"] = $resultadoAuto[0]->get_patente();
        $modificarDatos["Marca"] = $resultadoAuto[0]->get_marca();
        $modificarDatos["Modelo"] = $resultadoAuto[0]->get_modelo();
        $modificarDatos["DniDuenio"] = $resultadoPersona[0]->get_nroDni();
        $rta = $objAbmAuto->modificarAuto($modificarDatos);
        $cadena = $cadena."Se actualizaron correctamente los datos.<br><a href='../verAutos/verAutos.php'>Visualizar en autos</a>";
    }

?>

    <div class="container">

        <div class="row">
            <div class="col-12 d-flex justify-content-center text-align-center mt-5">

                <?php

                    if($rta){

                        echo "<h2 class='cartel'>".$cadena."</h2>";

                    }else{
                        echo "<h2 class='cartel'>".$cadena."</h2>";
                    }

                ?>

            </div>
        </div>

        <div class="row ">
            <div class="col-12 d-flex justify-content-center text-align-center">
                <input type="button" class="mt-4 btn btn-primary"" onclick="javascript: history.go(-1)" value="Volver"></input>
            </div>
        </div>

    </div>

    <?php
include_once("../../menu/pie.php")
?>
