<?php

    function cargaHoraria(){

        if ($_GET){

            $arregloSemana = array();
            array_push($arregloSemana,$_GET['lunes']);
            array_push($arregloSemana,$_GET['martes']);
            array_push($arregloSemana,$_GET['miercoles']);
            array_push($arregloSemana,$_GET['jueves']);
            array_push($arregloSemana,$_GET['viernes']);

            $sum = 0;

            for ($i=0; $i < count($arregloSemana); $i++) { 
                $sum = $sum + (int)$arregloSemana[$i];
            }
        
        }
        
        return $sum;

    }

    
?>