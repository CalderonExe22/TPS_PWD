<?php 
$ruta_base="../../../";
include_once "../../../menu/cabecera.php";
?>

    <script type="text/javascript">
        function validar(){
            var lunes = document.getElementById("lunes");
            var martes = document.getElementById("martes");
            var miercoles = document.getElementById("miercoles");
            var jueves = document.getElementById("jueves");
            var viernes = document.getElementById("viernes");
            var array_semana = Array(lunes, martes, miercoles, jueves, viernes);
            var resp = true;
            
            for (let i = 0; i < array_semana.length; i++) {
                if (array_semana[i].value < 0){
                    resp= false;
                    array_semana[i].style = "border-color:red;";
                }else{
                    array_semana[i].style = "border-color:gray";
                }         
            }

            return resp;
        }
    </script>

    <form name="form1" id="form1" method="get" action="../action/mostrarCargaHoraria.php" onSubmit="return validar();">
        <h2>Programacion Web Dinámica</h2>
        <table width="30%">
        <th colspan="2" style="text-align:left">
            Ingrese la cantidad de horas correspondientes:
        </th>
        <tr>
            <td width="20">
                Lunes:
            </td>
            <td>
            <input type="number" name="lunes" id="lunes" placeholder="Carga horaria">
            </td>
        </tr>
        <tr>
            <td>
                Martes:
            </td>
            <td>
            <input type="number" name="martes" id="martes" placeholder="Carga horaria"><br/>
            </td>
        </tr>
        <tr>
            <td>
                Miercoles:
            </td>
            <td>
            <input type="number" name="miercoles" id="miercoles" placeholder="Carga horaria">
            </td>
        </tr>
        <tr>
            <td>
                Jueves:
            </td>
            <td>
            <input type="number" name="jueves" id="jueves" placeholder="Carga horaria"><br/>
            </td>
        </tr>
        <tr><td>
                Viernes:
            </td>
            <td>
            <input type="number" name="viernes" id="viernes" placeholder="Carga horaria"><br/>
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="submit" id="submit" value="Enviar"/>
            </td>
        </tr>
        </table>
    </form>
    <div>
    <tr>
    <td class="ejercicios" style="text-align:center">
        <a href="../../../index.php"><button >Volver atrás.</button></a> 
    </td>
    </tr>
</div>


    <?php include_once "../../../menu/pie.php";?>