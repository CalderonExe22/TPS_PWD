<?php 

    class Auto{

        private $patente;
        private $marca;
        private $modelo;
        private $objDuenio;
        private $mensajeOperacion;

        public function __construct()
        {
            $this->patente = "";
            $this->marca = "";
            $this->modelo = "";
            $this->objDuenio = "";
            $this->mensajeOperacion = "";
        }

        //metodos get de la clase automovil

        public function get_patente(){
            return $this->patente;
        }

        public function get_marca(){
            return $this->marca;
        }

        public function get_modelo(){
            return $this->modelo;
        }

        public function get_objDuenio(){
            return $this->objDuenio;
        }

        public function get_mensajeOperacion(){
            return $this->mensajeOperacion;
        }

        //metodos set de la clase automovil

        public function set_patente($patente){
            $this->patente = $patente;
        }

        public function set_marca($marca){
            $this->marca = $marca;
        }

        public function set_modelo($modelo){
            $this->modelo = $modelo;
        }

        public function set_objDuenio($objDuenio){
            $this->objDuenio = $objDuenio;
        }

        public function set_mensajeOperacion($mensajeOperacion){
            $this->mensajeOperacion = $mensajeOperacion;
        }

    /*****************************************************************/

        function cargarAutomovil($patente,$marca,$modelo,$objDuenio){

            $this->set_patente($patente);
            $this->set_marca($marca);
            $this->set_modelo($modelo);
            $this->set_objDuenio($objDuenio);

        }

    /*****************************************************************/

        /**
         * funcion para insertar un automovil en la base de datos
         */
        public function insertarAutomovil(){
            
            $resultado = false;//bandera
            $objDuenio = $this->get_objDuenio();
            $bd = new BaseDatos();//iniciamos la base de datos

            $consultaInsert = "INSERT INTO auto (Patente,Marca,Modelo,DniDuenio) VALUES ('". $this->get_patente()."','". $this->get_marca()."','".$this->get_modelo()."','".$objDuenio->get_nroDni()."')";//consulta de insertar

            if ($bd->Iniciar()){
                if($idInsert = $bd->Ejecutar($consultaInsert)){
                    
                    $resultado = true;

                }else{
                    $this->set_mensajeOperacion($bd->getError());
                }
            }else{
                $this->set_mensajeOperacion($bd->getError());
            }

            return $resultado;

        }

        /**
         * 
         */

        function seleccionarAutomovil(){

            $resultado = false; //bandera

            $bd = new BaseDatos();//base de datas

            $consultaSelect = "SELECT * FROM auto WHERE patente = ".$this->get_patente().";";//condicion select

            if($bd->Iniciar()){//iniciamos la base de datos
                $resultadoConsulta = $bd->Ejecutar($consultaSelect);//realizamos la consulta
                if($resultadoConsulta > -1){
                    if($resultadoConsulta > 0){

                        $row = $bd->Registro();//coleccion datos
                        $objDuenio = new Persona();//obj persona
                        $objDuenio->set_nroDni($row["NroDni"]);//seteo el nro dni para poder buscar al duenio del auto
                        $objDuenio->seleccionarPersona();
                        $this->cargarAutomovil($row["Patente"],$row["Marca"],$row["Modelo"],$objDuenio);
                        $resultado = true;
                    }
                }
            }else{
                $this->set_mensajeOperacion($bd->getError());
            }
        }


        /**
         * 
         */
        
        public function actualizarAutomovil(){

            $resultado = false;
            $bd = new BaseDatos();
            $objDuenio = $this->get_objDuenio();

            $consultaUpdate = "UPDATE auto SET 
            Patente = '".$this->get_patente()."', Marca = '".$this->get_marca()."', Modelo = '".$this->get_modelo()."', DniDuenio = '".$objDuenio->get_nroDni()."' WHERE Patente = '".$this->get_patente()."'";

            if($bd->Iniciar()){
                if($bd->Ejecutar($consultaUpdate)){
                    $resultado = true;
                }else{
                    $this->set_mensajeOperacion($bd->getError());
                }            
            }else{
                $this->set_mensajeOperacion($bd->getError());
            }

            return $resultado;
        }


        /**
         * 
         */

        public function eliminarAutomovil(){

            $resultado = false;
            $bd = new BaseDatos();
            $consultaDelete = "DELETE FROM auto WHERE patente = ".$this->get_patente();

            if($bd->Iniciar()){
                if($bd->Ejecutar($consultaDelete)){
                    $resultado = true;
                }else{
                    $this->set_mensajeOperacion($bd->getError());
                }
            }else{
                $this->set_mensajeOperacion($bd->getError());
            }

            return $resultado;

        }


        /**
         * 
         */

        public static function listarAutomoviles($condicion = ""){

            $i = 0;
            $arregloLista = array();
            $bd = new BaseDatos();
            $consultaLista = "SELECT * FROM auto";

            if($condicion != ""){
                $consultaLista = $consultaLista." WHERE ".$condicion;
            }

            $resultadoConsulta = $bd->Ejecutar($consultaLista);

            if($resultadoConsulta > -1){
                if($resultadoConsulta > 0){     
                    while($row = $bd->Registro()){
                        $objAuto = new Auto();
                        $objDuenio = new Persona();
                        $objDuenio->set_nroDni($row["DniDuenio"]);
                        $objDuenio->seleccionarPersona();
                        $objAuto->cargarAutomovil($row["Patente"],$row["Marca"],$row["Modelo"],$objDuenio);
                        $arregloLista[] = $objAuto;
                    }
                }
            }else{
                $this->set_mensajeOperacion($bd->getError());
            }

            return $arregloLista;

        }

    /*******************************************************************************/

    }

?>