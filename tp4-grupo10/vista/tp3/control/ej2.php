<?php

function archivoTxt(){

    $dir = '../vista/archivos/';
    $nombre = $_FILES['archivo']["name"];

    $resultado = "";

    if($_FILES['archivo']["error"] <= 0){
        if($_FILES['archivo']['type'] == "text/plain"){           
           if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
            return $resultado = $resultado."1";
           }else{
            return $resultado = $resultado.file_get_contents('../vista/archivos/'.$nombre);
            
            }   
        }else{
            return $resultado = $resultado. "2";

        }
       
    }else{
        return $resultado = $resultado. "3";

    }


}

?>