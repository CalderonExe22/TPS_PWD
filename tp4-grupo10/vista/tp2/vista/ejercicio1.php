<?php 
$ruta_base="../../";
include_once "../../menu/cabecera.php";
?>


    <div>
        <form id="form1" name="form1" method="post" action="../action/mensajeEj3.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" id="usuario_border">Usuario</label>
                <input name="usuario" class="form-control" id="usuario" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="contrasenia" type="password" class="form-control" id="contrasenia" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button id="btn-sub" type="submit" class="btn btn-primary">Submit</button>
        </form><br>
        <div>
            
        </div>
    </div>

   

<script src="index.js" type="text/javascript"></script>
<script src="./bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>

<?php include_once "../../menu/pie.php";?>