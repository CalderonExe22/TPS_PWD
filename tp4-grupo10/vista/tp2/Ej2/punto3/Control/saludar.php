<?php

    function mostrarMensaje(){

        if ($_POST){
            if ($_POST){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $direccion = $_POST['direccion'];
                $edad = $_POST['edad'];
                $sexo = $_POST['sexo'];
                $estudio = $_POST['radio-stacked'];
                $deportes = $_POST['deportes']; 

                $mostrarMensaje = "";

                if ($edad >=18){
                    $mostrarMensaje = $mostrarMensaje."Hola yo soy ".$nombre.", ".$apellido." tengo edad ".$edad." y vivo en ".$direccion.".
                    Sexo: ".$sexo.".
                    Estudios: ".$estudio.".
                    Deportes: ".$deportes.".";
                }else{
                    $mostrarMensaje = $mostrarMensaje. "Hola yo soy ".$nombre.", ".$apellido." tengo edad ".$edad.".
                    Sexo: ".$sexo.".
                    Estudios: ".$estudio.".
                    Deportes: ".$deportes.".";
                }

            }

        }

        return $mostrarMensaje;

    }

?>