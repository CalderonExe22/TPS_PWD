<?php

    function mostrarCarga(){

         if ($_POST){
            
            $arregloSemana = array();
            array_push($arregloSemana,$_POST['lunes']);
            array_push($arregloSemana,$_POST['martes']);
            array_push($arregloSemana,$_POST['miercoles']);
            array_push($arregloSemana,$_POST['jueves']);
            array_push($arregloSemana,$_POST['viernes']);

            $sum = 0;
            for ($i=0; $i < count($arregloSemana); $i++) { 
                $sum = $sum + (int)$arregloSemana[$i];
            }
        
        }

        return $sum;

    }

   
?>