<?php

    function verNumero(){

        $tipoNumero = "";

        if ($_GET){

            $num = $_GET['numero'];

            if ($num > 0){
                $tipoNumero = $tipoNumero."El numero es positivo";
            } elseif ($num < 0){
                $tipoNumero = $tipoNumero."El numero es Negativo";
            } else {
                $tipoNumero = $tipoNumero."El numero es cero";
            }
 
        }

        return $tipoNumero;

    }
    
?>