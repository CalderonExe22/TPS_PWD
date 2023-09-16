<?php 
$ruta_base="../../../../";
include_once "../../../../menu/cabecera.php";
?>
    <script>
        function validar(){
            var edad = document.getElementById("validationServer01");
            var error = document.getElementById("valid-feedback");
            var estudiante = document.getElementsByName("radio-stacked");
            var resp = true;

            if (edad.value == "" || edad.value < 0){
                    resp = false;
                    edad.style="border-color:red";
                    error.style="color:red";
                    error.innerHTML="Ingrese una edad valida";
            }else if (edad.value <0){
                resp = false;
                    edad.style="border-color:red";
                    error.style="color:red";
                    error.innerHTML="Ingrese una edad valida";
            }else{
                edad.style="border-color:green";
                error.innerHTML="Looks good!";
            }
            if (estudiante.value == ""){
                resp = false;
            }

            return resp;
        }
    </script>

<form class="was-validated"  method="post" action="../action/mostrarPrecion.php" onSubmit="return validar();" novalidate>
    <div class="row-md-4">
    <div class="col-md-4">
    <label for="validationServer01" class="form-label">Edad</label>
    <input type="text" class="form-control" name="validationServer01" id="validationServer01" required>
    <div class="valid-feedback" id="valid-feedback">
      Looks good!
    </div>
    </div>

    <div class="row-md-4">
    <div class="col-md-4">
    <label for="form-check" class="form-label">Es estudiante?</label>
    <div class="form-check">
    <input type="radio" class="form-check-input" id="validationFormCheck1" value="1" name="radio-stacked" required>
    <label class="form-check-label" for="validationFormCheck1">Si</label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck2" value="2" name="radio-stacked" required>
        <label class="form-check-label" for="validationFormCheck2">No</label>
    </div>
    </div>
    </div>
    <div class="row-md-4">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>


<?php include_once "../../../../menu/pie.php";?>