<?php 
$ruta_base="../../../../";
include_once "../../../../menu/cabecera.php";
?>
 <script>
        function validar(){
            var lun = document.getElementById("validationServer01");
            var mar = document.getElementById("validationServer02");
            var mier = document.getElementById("validationServer03");
            var jue = document.getElementById("validationServer04");
            var vie = document.getElementById("validationServer05");
            var arreglo_semana = Array(lun, mar, mier, jue, vie);
            var resp=true;
            for (let i = 0; i < arreglo_semana.length; i++) {
                if (arreglo_semana[i].value == "" || arreglo_semana[i].value < 0){
                    resp = false;
                    arreglo_semana[i].style="border-color:red";
                    
                }
            }

            return resp;

        }
    </script>

<form class="was-validated row g-3" method="post" action="../action/mostrarCarga.php" onSubmit="return validar();" novalidate>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Lunes</label>
    <input type="number" class="form-control" id="validationServer01" name="lunes" required>
    <div id="validationServer01Feedback" class="valid-feedback">
        Looks good!
    </div>
    <div id="validationServer01Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Martes</label>
    <input type="number" class="form-control" id="validationServer02" name="martes" required>
    <div id="validationServer02Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer02Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer03" class="form-label">Miercoles</label>
    <input type="number" class="form-control" id="validationServer03" name="miercoles" required>
    <div id="validationServer03Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer03Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer04" class="form-label">Jueves</label>
    <input type="number" class="form-control" id="validationServer04" name="jueves" required>
    <div id="validationServer04Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer04Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer05" class="form-label">Viernes</label>
    <input type="number" class="form-control" id="validationServer05" name="viernes" required>
    <div id="validationServer05Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer05Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-12">
    <button class="btn btn-primary" type="submit" >Submit form</button>
  </div>
</div>
</form>


<?php include_once "../../../../menu/pie.php";?>