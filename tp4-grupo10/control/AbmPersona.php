<?php

    class AbmPersona{

        //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
         * @param array $param
         * @return Persona
         */
        private function cargarObjetoPersona($param){
            $objPersona = null;
            if(array_key_exists("NroDni",$param) && array_key_exists("Apellido",$param) && array_key_exists("Nombre",$param) && array_key_exists("fechaNac",$param) && array_key_exists("Telefono",$param) && array_key_exists("Domicilio",$param)){
                $objPersona = new Persona();
                $objPersona->cargarPersona($param["NroDni"],$param["Apellido"],$param["Nombre"],$param["fechaNac"],$param["Telefono"],$param["Domicilio"]);
            }
            return $objPersona;
        }

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
         * @param array $param
         * @return Persona
         */
        private function CargarObjPersonaClave($param){
            $objPersona = null;
            if(isset($param["NroDni"])){
                $objPersona = new Persona();
                $objPersona->cargarPersona($param["NroDni"],null,null,null,null,null);
            }
            return $objPersona;
        }

        /**
         * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
         * @param array $param
         * @return boolean
         */
        private function seteadosCamposClaves($param){
            $resultado = false;
            if (isset($param["NroDni"])){
                $resultado = true;
            }
            return $resultado;
        }

        /**
         * permite inserta un objeto persona
         * @param array $param
         */
        public function insertarPers($param){
            $resultado = false;
            //$param["NroDoc"] = null;
            $objPersona = $this->cargarObjetoPersona($param);
            if($objPersona != null && $objPersona->insertarPersona()){
                $resultado = true;
            }
            return $resultado;
        }

        /**
         * permite eliminar un objeto persona
         * @param array $param
         * @return boolean
         */
        public function eliminarPers($param){
            $resultado = false;
            if($this->seteadosCamposClaves($param)){
                $objPersona = $this->CargarObjPersonaClave($param);
                if($objPersona != null && $objPersona->eliminarPersona()){
                    $resultado = true;
                }
            }
            return $resultado;
        }

        /**
         * permite modificar un objeto persona
         * @param array $param
         * @return boolean
         */
        public function modificarPers($param){
            $resultado = false;
            if($this->seteadosCamposClaves($param)){
                $objPersona = $this->cargarObjetoPersona($param);
                if($objPersona != null && $objPersona->actualizarPersona()){
                    $resultado = true;
                }
            }
            return $resultado;
        }

        /**
         * permite buscar un objeto persona
         * @param array $param
         * @return array
         */
        public function buscarPers($param){
            $condicionWhere = " true ";
            if($param <> null){
                if(isset($param["NroDni"])){
                    $condicionWhere = $condicionWhere. " and NroDni = '".$param["NroDni"]."'";
                }
                if(isset($param["Apellido"])){
                    $condicionWhere = $condicionWhere. " and Apellido = '".$param["Apellido"]."'";
                }
                if(isset($param["Nombre"])){
                    $condicionWhere = $condicionWhere. " and Nombre = '".$param["Nombre"]."'";
                }
                if(isset($param["fechaNac"])){
                    $condicionWhere = $condicionWhere. " and fechaNac = '".$param["fechaNac"]."'";
                }
                if(isset($param["Telefono"])){
                    $condicionWhere = $condicionWhere. " and Telefono = '".$param["Telefono"]."'";
                }
                if(isset($param["Domicilio"])){
                    $condicionWhere = $condicionWhere. " and Domicilio = '".$param["Domicilio"]."'";
                }
            }
            $arregloBuscar = persona::listarPersonas($condicionWhere);
            return $arregloBuscar;
        } 
    }

?>