<?php 
$ruta_base="../../";
include_once "../../menu/cabecera.php";
?>

    <div>
        <form id="form1" name="form1" method="post" action="../action/resultadoEj1.php" enctype="multipart/form-data">            
            <div class="mb-3">
            <label for="validationCustom03" class="form-label">Seleccionar un archivo:</label>
            <input require name="archivo" type="file" class="form-control" id="archivo" required>
            </div>
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button id="btn-sub" type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div><br>
    <tr>
    <td class="ejercicios" style="text-align:center">
    <a href="../indexTP3.php"><button class="btn btn-primary" type="button">Volver atrás.</button></a> 
    </td>
    </tr>
    
<script src="index.js" type="text/javascript"></script>
<script src="./bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
<?php include_once "../../menu/pie.php";?>
