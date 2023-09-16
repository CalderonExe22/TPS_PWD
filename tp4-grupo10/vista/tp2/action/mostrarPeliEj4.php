<?php
$ruta_base="../../";
 include_once "../../menu/cabecera.php";
?>


   <div class='container bg-success p-5 m-5'> 

    <?php include_once("../control/mostarpelis.php");

        $datos = datosPeli();

        $img = $datos["img"];
        $imgOk = true;

        switch($img){
            case "1":
                $imgOk = false;
                $img = "ERROR: no se pudo cargar el imagen";
                break;
            case "2":
                $imgOk = false;
                $img = "El archivo no tiene el formato solicitado.";
                break;
            case "3":
                $imgOk = false;
                $img = "no hay archivo";
                break;     
        }

        if($imgOk){
            $img = "<img width='150' height='150' src='../vista/archivos/".$img."' alt='Foto ilustrativa de la pelicula'>";
        }

        echo "
            <h1>La película introducida es:</h1>
                <br>
                <b>Título:</b> ".$datos["titulo"]."
                <br>
                <b>Actores:</b> ".$datos["actores"]."
                <br>
                <b>Director:</b> ".$datos["director"]."
                <br>
                <b>Guión:</b> ".$datos["guion"]."
                <br>
                <b>Producción:</b> ".$datos["produccion"]."
                <br>
                <b>Año:</b> ".$datos["anio"]."
                <br>
                <b>Nacionalidad:</b> ".$datos["nacionalidad"]."
                <br>
                <b>Género:</b> ".$datos["genero"]."
                <br>
                <b>Duracion:</b> ".$datos["duracion"]." minutos
                <br>
                <b>Restricciones de edad:</b> ".$datos["publico"]."
                <br>
                <b>Sinopsis:</b> ".$datos["sinopsis"]."
                <br>
                <b>Imagen de la pelicula:</b><br>
                ".$img."";                
        
    ?>

        <div class="mt-4">                    
            <tr>
                <td class='ejercicios' style='text-align:center'>                    
                    <a href='../vista/ejercicio4.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                </td>
            </tr>
        </div>
    </div>

    <?php include_once("../../menu/pie.php");
    ?>