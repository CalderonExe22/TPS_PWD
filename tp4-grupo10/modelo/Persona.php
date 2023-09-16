<?php

    class Persona{

        private $nroDni;
        private $nombre;
        private $apellido;
        private $fechaNac;
        private $telefono;
        private $domicilio;
        private $mensajeOperacion;

        public function __construct()
        {
            $this->nroDni = "";
            $this->apellido = "";
            $this->nombre = "";
            $this->fechaNac = "";
            $this->telefono = "";
            $this->domicilio = "";
            $this->mensajeOperacion = "";
        }

    //metodos get de la clase persona...

        public function get_nroDni(){
            return $this->nroDni;
        }

        public function get_nombre(){
            return $this->nombre;
        }

        public function get_apellido(){
            return $this->apellido;
        }

        public function get_fechaNac(){
            return $this->fechaNac;
        }

        public function get_telefono(){
            return $this->telefono;
        }

        public function get_domicilio(){
            return $this->domicilio;
        }

        public function get_mensajeOperacion(){
            return $this->mensajeOperacion;
        }

    //metodos set de la clase persona...

        public function set_nroDni($nroDni){
            $this->nroDni = $nroDni;
        }

        public function set_nombre($nombre){
            $this->nombre = $nombre;
        }

        public function set_apellido($apellido){
            $this->apellido = $apellido;
        }

        public function set_fechaNac($fechaNac){
            $this->fechaNac = $fechaNac;
        }
        
        public function set_telefono($telefono){
            $this->telefono = $telefono;
        }

        public function set_domicilio($domicilio){
            $this->domicilio = $domicilio;
        }

        public function set_mensajeOperacion($mensajeOperacion){
            $this->mensajeOperacion = $mensajeOperacion;
        }

    /**********************************************************************/

        public function cargarPersona($nroDni,$apellido,$nombre,$fechaNac,$telefono,$domicilio){

            $this->set_nroDni($nroDni);
            $this->set_apellido($apellido);
            $this->set_nombre($nombre);
            $this->set_fechaNac($fechaNac);
            $this->set_telefono($telefono);
            $this->set_domicilio($domicilio);

        }

    /**********************************************************************/

        /**
         * funcion que selecciona a una persona dentro de la base de datos
         * 
         */
        public function seleccionarPersona(){
            
            $resp = false;
            
            $bd=new BaseDatos();
            
            $consultaSelect = "SELECT * FROM persona WHERE NroDni = ".$this->get_nroDni();
            
            if($bd->Iniciar()){
                $res = $bd->Ejecutar($consultaSelect);
                if($res > -1){
                    if( $res > 0 ){
                        $row = $bd->Registro();
                        $this->cargarPersona($row["NroDni"], $row["Apellido"], $row["Nombre"], $row["fechaNac"],$row["Telefono"],$row["Domicilio"]);
                        $resp = true;
                    }
                }
            }else{
                $this->set_mensajeOperacion($bd->getError());
            }
            return $resp;
        }

        /**
         * funcion que inserta a una persona dentro de la base de datos
         */
        public function insertarPersona(){

            $resultado = false;//bandera
            $bd = new BaseDatos();//objeto base de datos
            $consultaInsert = "INSERT INTO persona(NroDni,Apellido,Nombre,fechaNac,Telefono,Domicilio) VALUES ('".$this->get_nroDni()."','".$this->get_apellido()."','".$this->get_nombre()."','".$this->get_fechaNac()."','".$this->get_telefono()."','".$this->get_domicilio()."');";

            if ($bd->Iniciar()){
                if($elId = $bd->Ejecutar($consultaInsert)){//$bd->Ejecutar retorna el id que se asigno
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
         * actualiza los datos de una persona en la base de datos
         */
        public function actualizarPersona(){

            $bd = new BaseDatos();
            $resultado = false;
            $consultaUpdate = "UPDATE persona SET 
            Apellido = '".$this->get_apellido()."',Nombre = '".$this->get_nombre()."',fechaNac = '".$this->get_fechaNac()."',Telefono = '".$this->get_telefono()."',Domicilio = '".$this->get_domicilio()."'
            WHERE NroDni = '".$this->get_nroDni()."'";

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
         * elimina los datos de una persona en la base de datos
         */
        public function eliminarPersona(){

            $bd = new BaseDatos();
            $resultado = false;
            $consultaDelete = "DELETE FROM persona WHERE NroDni = ".$this->get_nroDni();

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

        public static function listarPersonas($condicion = ""){
            
            $arregloLista = array();
            $bd = new BaseDatos();
            $consultaListar = "SELECT * FROM persona"; 

            if($condicion != ""){
                $consultaListar = $consultaListar." WHERE".$condicion;
            }

            $resultadoEjecucion = $bd->Ejecutar($consultaListar);

            if($resultadoEjecucion > -1 ){
                if($resultadoEjecucion > 0){
                    while($row = $bd->Registro()){
                        $objPersonaListar = new Persona();
                        $objPersonaListar->cargarPersona($row["NroDni"], $row["Apellido"], $row["Nombre"], $row["fechaNac"],$row["Telefono"],$row["Domicilio"]);
                        $arregloLista[]=$objPersonaListar;                    
                    }
                }
            }else{
                $this->set_mensajeOperacion($bd->getError());
            }
            return $arregloLista;
        }
    }
?>