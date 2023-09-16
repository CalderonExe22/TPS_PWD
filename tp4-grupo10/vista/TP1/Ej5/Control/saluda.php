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

                $mostrarMensaje = "";

                if ($edad >= 18){
                    $mostrarMensaje = $mostrarMensaje."Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años (Mayor de edad) y vivo en ".$direccion.".
                    Estudios: ".$estudios.".<br>Sexo: ".$sexo.".";
                } else {
                    $mostrarMensaje = $mostrarMensaje."Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años (Menor de edad) y vivo en ".$direccion.".
                    Estudios: ".$estudios.".<br>Sexo: ".$sexo.".";
                }
            }
        }
        
        return $mostrarMensaje;

    }

?>