<?php

    function mostrarMensaje(){

        if ($_POST){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $edad = $_POST['edad'];
  
            $mensajePost = "";

            $mensajePost = $mensajePost. "Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion;
            
            return $mensajePost;

        } elseif ($_GET){
            if ($_GET){

                $nombre = $_GET['nombre'];
                $apellido = $_GET['apellido'];
                $direccion = $_GET['direccion'];
                $edad = $_GET['edad'];

                $mensajeGet = "";
        
                $mensajeGet = $mensajeGet."Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion;
                
                return $mensajeGet;
            
            }
        }


    }

    
?>