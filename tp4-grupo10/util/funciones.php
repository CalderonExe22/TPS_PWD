<?php

    function encapsulamientoEnvio(){

        $arrayDatos = array();

        if(!empty($_GET)){
            $arrayDatos = $_GET;
        }
        if(!empty($_POST)){
            $arrayDatos = $_POST;
        }

        if(count($arrayDatos)){
            foreach($arrayDatos as $indice => $valor) {
                if($valor == ""){
                    $arrayDatos[$indice] = 'null';
                }
            }
        }

        return $arrayDatos;

    }

    /**
     * Imprime el contenido de la variable $e respetando su estructura con los tag <pre> de html
    */
    function verEstructura($e){
        echo "<pre>";
            print_r($e);
        echo "</pre>"; 
    }

    spl_autoload_register(function($class_name){
        $directorys = array(
            $_SESSION['ROOT'].'modelo/',
            $_SESSION['ROOT'].'modelo/conectar/',
            $_SESSION['ROOT'].'control/',
            //  $GLOBALS['ROOT'].'util/class/',
        );
        //print_object($directorys) ;
        foreach($directorys as $directory){
            if(file_exists($directory.$class_name . '.php')){
                // echo "se incluyo".$directory.$class_name . '.php';
                require_once($directory.$class_name . '.php');
                return;
            }
        }  
    })

?>