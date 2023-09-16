<?php

    function mostrarNumero(){

        if ($_GET){
            $num = $_GET['numero'];
            $tipoNumero = "";
            if ($num > 0){
                $tipoNumero = $tipoNumero."El numero es positivo";
            } elseif ($num < 0){
                $tipoNumero = $tipoNumero. "El numero es negativo";
            } else {
                $tipoNumero = $tipoNumero. "El numero es igual a cero";
            }

        }

        return $tipoNumero;

    }

    

?>