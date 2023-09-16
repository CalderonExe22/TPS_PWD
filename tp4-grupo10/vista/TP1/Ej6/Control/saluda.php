<?php

    function mostrarMensaje(){
        if ($_GET){
            if ($_GET){
                $nombre = $_GET['nombre'];
                $apellido = $_GET['apellido'];
                $direccion = $_GET['direccion'];
                $edad = $_GET['edad'];
                $estudios = $_GET['estudios'];
                $sexo = $_GET['sexo'];
                $cont_deportes = 0;

                $mostrarMensaje = "";

                if (isset($_GET['1'])){
                    $cont_deportes++;
                }
                if (isset($_GET['2'])){
                    $cont_deportes++;
                }
                if (isset($_GET['3'])){
                    $cont_deportes++;
                }
                if (isset($_GET['4'])){
                    $cont_deportes++;
                }
                if ($edad >= 18){
                    $mostrarMensaje = $mostrarMensaje."Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".
                    Estudios: ".$estudios.".Sexo: ".$sexo.".Deportes practicados: ".($cont_deportes).".";
                } else {
                    $mostrarMensaje = $mostrarMensaje. "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años.
                    Estudios: ".$estudios.".Sexo: ".$sexo.".Deportes practicados: ".($cont_deportes).".";
                }
            }
        }

        return $mostrarMensaje;

    }

   
?>