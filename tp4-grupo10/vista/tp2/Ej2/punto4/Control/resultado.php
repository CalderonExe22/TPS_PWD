<?php

    function ejecutarOperacion(){

        if ($_POST){
            $valor1 = $_POST['validationServer01'];
            $valor2 = $_POST['validationServer02'];

            $operacion = $_POST['select'];

            $totalOperacion = "";

            if ($operacion == "suma"){
                $totalOperacion = $totalOperacion."Resultado: ".$valor1+$valor2.".";
            }elseif($operacion == "resta"){
                $totalOperacion = $totalOperacion. "Resultado: ".$valor1-$valor2.".";
            }else {
                $totalOperacion = $totalOperacion. "Resultado: ".$valor1*$valor2.".";
            }
        }

        return $totalOperacion;

    }


?>