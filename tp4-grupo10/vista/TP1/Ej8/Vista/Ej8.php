<?php 
$ruta_base="../../../";
include_once "../../../menu/cabecera.php";

?>

    <script type="text/javascript">
        function validar(){
            var edad = document.getElementById("edad");
            var estudio = document.querySelector('input[name="estudio"]:checked').value;
            var resp = true;

            if (edad.value == "" || edad.value < 0){
                resp= false;
                edad.style= "border-color:red;"
            }
            return resp;
        }
    </script>

        <form method="post" action="../action/mostrarPrecio.php" name="form1" id="form1" onSubmit="return validar();">
            <input type="number" name="edad" id="edad" placeholder="Ingrese su edad"/><br/>
            Es estudiante?<br/>
            <input type="radio" name="estudio" id="estudio" value="1"/>Si<br/>
            <input type="radio" name="estudio" id="estudio" value="2" checked>No<br/>
            <input type="submit" name="submit" id="submit" value="Enviar"/>
        </form>
        <div>


<?php include_once "../../../menu/pie.php";?>