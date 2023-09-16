

<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

$datos = encapsulamientoEnvio();
$objAbmAuto = new AbmAuto();
$objAbmPersona = new AbmPersona();
$buscarPersona["NroDni"] = $datos["DniDuenio"];
$buscarAuto["Patente"] = $datos["Patente"];
$respuestaPersona = $objAbmPersona->buscarPers($buscarPersona);
$respuestaAuto = $objAbmAuto->buscarAuto($buscarAuto);


?>

    <div class="conteiner">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-align-center  mt-5">
                <?php

                    $cadena = "";
                    $insert = true;

                    if(count($respuestaPersona) == 0){
                        $insert = false;   
                        $cadena = $cadena."No se encontro una persona para asignar el auto<br>Si desea ingresar una persona <a href='../nuevaPersona/nuevaPersona.php'>toque aqui.</a><br><br>";        
                    }

                    if( count($respuestaAuto) > 0){
                        $cadena = $cadena."Esa matricula ya esta registrada en la Base de datos.";
                        $insert = false;
                    } 
                    
                    if($insert){
                        $objAbmAuto->insertarAuto($datos);
                        echo "<h2 class='cartel'>Se logro realizar el ingreso correctamente.<a href='../verAutos/verAutos.php'>ver resultado</a></h2>";
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