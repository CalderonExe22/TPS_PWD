<?php
$ruta_base="../../";
include_once "../../menu/cabecera.php";

?>

    <?php include_once("../control/ej2.php");

        $rta = archivoTxt();
        $fileOk = true;

        switch($rta){
            case "1":
                $fileOk = false;
                echo "ERROR: no se pudo cargar el archivo ";
                break;
            case "2":
                $fileOk = false;
                echo "El archivo no tiene el formato correcto";
                break;
            case "3":
                $fileOk = false;
                echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
                break;
           
            break;
        }

        if($fileOk){
            echo "<textarea rows=10 cols=50>".$rta."</textarea>";
        }
        
    ?>
    <div>                    
        <tr>
            <td class='ejercicios' style='text-align:center'>                    
                <a href='../vista/ejercicio2.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
            </td>
        </tr>
    </div>
    <?php include_once "../../../menu/pie.php";?>
