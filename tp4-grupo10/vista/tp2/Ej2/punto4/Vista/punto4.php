<?php 
$ruta_base="../../../../";
include_once "../../../../menu/cabecera.php";
?>
 <script>
    function validar(){
        var op1 = document.getElementById("validationServer01");
        var op2 = document.getElementById("validationServer02");
        var error = document.getElementById("msg");
        var error2 = document.getElementById("msg2");
        var resp=true;
        if (op1 == ""){
            resp=false;
            error.innerHTML = "Ingrese un numero !";
            error.style = "color:red";
            op1.style = "border-color:red";
        }
        if (op2 == ""){
            resp=false;
            error2.innerHTML = "Ingrese un numero !";
            error2.style = "color:red";
            op2.style = "border-color:red";
        }
        return resp;
    }
   </script>

<form class="was-validated" method="post" action="../action/mostrarResultado.php" onSubmit="return validar();" novalidate>
<div class="row-md-4">
<div class="col-md-4">
    <label for="validationServer01" class="form-label">Ingrese un numero</label>
    <input type="number" class="form-control" id="validationServer01" name="validationServer01" required>
    <div class="valid-feedback" id="msg">
      Looks good!
    </div>
</div>
</div>

<div class="row-md-4">
<div class="col-md-4">
    <label for="validationServer02" class="form-label">Ingrese un numero</label>
    <input type="number" class="form-control" id="validationServer02" name="validationServer02" required>
    <div class="valid-feedback" id="msg2">
      Looks good!
    </div>
</div>
</div>

<div class="row-md-4">
<div class="col-md-2">
    <label for="validationServer04" class="form-label">Operacion</label>
    <select class="form-select" id="validationServer04" name="select" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="multiplicacion">Multiplicacion</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
   
  <div class="col-md-2">
  <input type="submit" value="Enviar" class="btn btn-primary mt-2">
  </div>

  </div>
</div>
</form>


</body>
</html>
<?php include_once "../../../../menu/pie.php";?>