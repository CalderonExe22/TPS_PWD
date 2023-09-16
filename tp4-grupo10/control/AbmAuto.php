<?php

    class AbmAuto{

        //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
         * @param array $param
         * @return Auto
         */

        private function cargarObjetoAuto($param){

            $objAuto = null;
            if(array_key_exists("Patente",$param) && array_key_exists("Marca",$param) && array_key_exists("Modelo",$param) && array_key_exists("DniDuenio",$param)){
                $objAuto = new Auto();
                $objPersona = new Persona();
                $objPersona->set_nroDni($param["DniDuenio"]);
                $objPersona->seleccionarPersona();
                $objAuto->cargarAutomovil($param["Patente"],$param["Marca"],$param["Modelo"],$objPersona);
            }
            return $objAuto;
        }

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
         * @param array $param
         * @return Auto
         */
        private function cargarObjAutoClave($param){
            $objAuto = null;
            if(isset($param["Patente"])){
                $objAuto = new Auto();
                $objAuto->cargarAutomovil($param["Patente"],null,null,null);
            }
            return $objAuto;
        }

        /**
         * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
         * @param array $param
         * @return boolean
         */
        private function seteadosCamposClave($param){
            $resultado = false;
            if(isset($param["Patente"])){
                $resultado = true;
            }
            return $resultado;
        }


        /**
         * permite inserta un objeto auto
         * @param array $param
         */
        function insertarAuto($param){
            $resultado = false;
            //$param["Patente"] = null;
            $objAuto = $this->cargarObjetoAuto($param);
            if($objAuto != null && $objAuto->insertarAutomovil()){
                $resultado = true;
            }
            return $resultado;
        }

        /**
         * permite eliminar un objeto auto
         * @param array $param
         * @return boolean
         */
        public function eliminarAuto($param){
            $resultado = false;
            if($this->seteadosCamposClave($param)){
                $objAuto = $this->cargarObjAutoClave($param);
                if($objAuto != null && $objAuto->eliminarAutomovil()){
                    $resultado = true;
                }
            }
            return $resultado;
        }

        /**
         * permite modificar un objeto auto
         * @param array $param
         * @return boolean
         */
        public function modificarAuto($param){
            $resultado = false;
            if($this->seteadosCamposClave($param)){
                $objAuto = $this->cargarObjetoAuto($param);
                if($objAuto != null && $objAuto->actualizarAutomovil()){
                    $resultado = true;
                }
            }
            return $resultado;
        }

        /**
         * permite buscar un objeto auto
         * @param array $param
         * @return array
         */
        public function buscarAuto($param){
            $condicionWhere = " true ";
            if($param <> null){
                if(isset($param["Patente"])){
                    $condicionWhere = $condicionWhere . " and Patente = '".$param["Patente"]."'";
                }
                if(isset($param["Marca"])){
                    $condicionWhere = $condicionWhere . " and Marca = '".$param["Marca"]."'";
                }
                if(isset($paren["Modelo"])){
                    $condicionWhere = $condicionWhere . " and Modelo = '".$paren["Modelo"]."'";
                }
                if(isset($param["DniDuenio"])){
                    $condicionWhere = $condicionWhere . " and DniDuenio = '".$param["DniDuenio"]."'";
                }
            }
            $arregloBuscar = auto::listarAutomoviles($condicionWhere);
            return $arregloBuscar;
        }
    }

?>