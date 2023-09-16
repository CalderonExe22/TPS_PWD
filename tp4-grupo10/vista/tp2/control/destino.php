<?php

    function validForm(){

        $resultado = "";

        $arrayUsuarios = array('tomas.salto' => 'albano99', 'tomas.ferrin' => '42095934', 'dario.pedraza' => '12345678');
        if (isset($_POST)){
            //guardar datos
            if (isset($_POST['usuario'])) {
                $user = $_POST['usuario'];
            } else {
                $user = '';
            }
            if (isset($_POST['contrasenia'])) {
                $password = $_POST['contrasenia'];
            } else {
                $password = '';
            }
            //verificacion de campos por las dudas
            if ($user != '' && $password != '') {
                //var_dump($arrayUsuarios[$user]);
                //var_dump(key_exists($user, $arrayUsuarios));
                //verificar si esta en el array el user 
                if (key_exists($user, $arrayUsuarios)) {
                    if ($arrayUsuarios[$user] == $password) {                        
                    
                    $resultado = $resultado."Bienvenido ".$user.", ha iniciado sesion correctamente!";
                
                    } else {

                        $resultado = $resultado."ha ingresado una contraseña inválida";
                        
                        }
                } else {
                    
                    $resultado = $resultado."No hemos podido encontrar dicho usuario";
            
                }
            } else {
                
                $resultado = $resultado."No hay datos";                    

            }

            return $resultado;
        }        

    }

    

?>