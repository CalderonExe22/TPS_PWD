<?php
function archivos(){
    $dir = '../vista/archivos/';  // Definimos Directorio donde se guarda el archivo
// Comprobamos que no se hayan producido errores

    $resultado = "";

        if($_FILES['archivo']["error"] <= 0){        
            if($_FILES['archivo']['type'] == "application/pdf" || $_FILES['archivo']['type'] == "application/doc"){            
                if($_FILES['archivo']['size'] < 2 * 1024 * 1024 ){
                    if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
                        return $resultado = $resultado."1";
                    }else{
                        
                        return $resultado = $resultado.$_FILES["archivo"]["name"];
                        
                        }                   
                }else{
                    return $resultado = $resultado."2";
                
                }
            }else{
                return $resultado = $resultado. "3";
            }
    // Intentamos copiar el archivo al servidor.           
        }else{
            return $resultado = $resultado. "4";
        }
        
    return $resultado;
}




 ?>