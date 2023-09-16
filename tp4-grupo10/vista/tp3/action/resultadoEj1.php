<?php 
$ruta_base="../../";
include_once "../../menu/cabecera.php";

?>

    <?php include_once("../control/subirarchivo.php");

        $rta = archivos();
        $fileOk = true;

        switch($rta){
            case "1":
                $fileOk = false;
                echo "ERROR: no se pudo cargar el archivo ";
                break;
            case "2":
                $fileOk = false;
                echo "el archivo es muy pesado";
                break;
            case "3":
                $fileOk = false;
                echo "El archivo no tiene el formato correcto";
                break;
            case "4":
                $fileOk = false;
                echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
                break;
            break;
        }

        if($fileOk){
            echo "<a href='../vista/archivos/".archivos()."'> Aqui </a>";
        }
        
    ?>
    <div>                    
        <tr>
            <td class='ejercicios' style='text-align:center'>                    
                <a href='../vista/ejercicio1.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
            </td>
        </tr>
    </div>
<?php include_once "../../../menu/pie.php";?>

