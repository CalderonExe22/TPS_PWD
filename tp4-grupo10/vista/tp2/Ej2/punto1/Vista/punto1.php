<?php 
$ruta_base="../../../../";
include_once "../../../../menu/cabecera.php";
?>
        <script>
            function validacion(){
                var numero = document.getElementById("validationCustom01");
                var resp = true;
                var lab = document.getElementById("lab");

                if (numero.value === ""){
                    resp= false;
                    numero.style="border-color:red";
                    lab.innerHTML = "Debe ingresar un numero:";
                }
                return resp;
            }
        </script>

    <form class="row g-3 needs-validation" method="get" action="../action/mostrarNumero.php" id="form1" name="form1" 
    onSubmit="return validacion();" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label" id="lab">Ingrese un numero: </label>
        <input type="number" class="form-control" id="validationCustom01" name="numero" value="" required>
        <div class="valid-feedback">
        Looks good!
        </div>
        <div class="invalid-feedback">
        Error!
        </div>
    </div>
    <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
    </form>

<?php include_once "../../../../menu/pie.php";?>