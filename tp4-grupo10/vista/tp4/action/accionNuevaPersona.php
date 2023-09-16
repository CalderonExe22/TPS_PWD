
<?php
$ruta_base = "../../";
include_once("../../menu/cabecera.php");

$datos = encapsulamientoEnvio();
$buscar["NroDni"] = $datos["NroDni"];
$objAmb = new AbmPersona();
$encontroPers = $objAmb->buscarPers($buscar);

if(count($encontroPers) == 0){
    $insertarPersona = $objAmb->insertarPers($datos);
}else{
    $insertarPersona = false;
}

//devuelve true si el insert se ejecuto con exito, sino false

?>

    
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-align-center  mt-5">
                <?php

                    if($insertarPersona){
                        echo "<h2 class='cartel'>Se logro realizar el ingreso correctamente.<a href='../listaPersona/listaPersona.php'>ver resultado</a></h2>";
                    }else{
                        echo "<h2 class='cartel'>Ocurrio un error a la hora de realizar el ingreso.<br>Verifique los datos ingresados</h2>";
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