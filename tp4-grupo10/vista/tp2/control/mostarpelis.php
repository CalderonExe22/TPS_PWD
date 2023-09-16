
<?php


   /* class pelicula{

        private $titulo;
        private $actores;
        private $director;
        private $guion; 
        private $produccion;
        private $anio;
        private $nacionalidad;
        private $genero;
        private $duracion;
        private $publico;
        private $sinopsis;
        private $img;

        public function __construct()
        {
            
        }

    }*/

    function datosPeli(){

        $dir = "../vista/archivos/";
        $nombre = $_FILES['imagen']["name"];

        $datosPeli = [
            "titulo" => "",
            "actores" => "",
            "director" => "",
            "guion" => "",
            "produccion" => "",
            "anio" => "",
            "nacionalidad" => "",
            "genero" => "",
            "duracion" => "",
            "publico" => "",
            "sinopsis" => "",
            "img" => ""
        ];

        if(isset($_POST)){
            if($_FILES['imagen']["error"] <= 0){
                if($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png"){          
                   
                   if (!copy($_FILES['imagen']['tmp_name'], $dir.$_FILES['imagen']['name'])) {
                    $datosPeli["img"] = "1"; //"ERROR: no se pudo cargar el imagen
                    
                   }else{                    
                    $datosPeli["img"] = $_FILES["imagen"]["name"];                   
                    } 
                                
                }else{
                    
                    $datosPeli["img"] = "2"; //"El archivo no tiene el formato solicitado. El formato invalido de la imagen es: $img";
                                
                }                
            }else{
                $datosPeli["img"] = "3"; //"no hay archivo <div>                    
                
            }
            //recuperacion de datos 
            if(isset($_POST['titulo'])){
                $datosPeli["titulo"] = $_POST['titulo'];
            }else{
                $titulo = '';
            }
            if(isset($_POST['actores'])){
                $datosPeli["actores"] = $_POST['actores'];
            }else{
                $actores = '';
            }
            if(isset($_POST['director'])){
                $datosPeli["director"] = $_POST['director'];
            }else{
                $director = '';
            }
            if(isset($_POST['guion'])){
                $datosPeli["guion"] = $_POST['guion'];
            }else{
                $guion = '';
            }
            if(isset($_POST['produccion'])){
                $datosPeli["produccion"] = $_POST['produccion'];
            }else{
                $produccion = '';
            }
            if(isset($_POST['anio'])){
                $datosPeli["anio"] = $_POST['anio'];
            }else{
                $anio = '';
            }
            if(isset($_POST['nacionalidad'])){
                $datosPeli["nacionalidad"] = $_POST['nacionalidad'];
            }else{
                $nacionalidad = '';
            }
            if(isset($_POST['genero'])){
                $datosPeli["genero"] = $_POST['genero'];
            }else{
                $genero = '';
            }
            if(isset($_POST['duracion'])){
                $datosPeli["duracion"] = $_POST['duracion'];
            }else{
                $duracion = '';
            }
            if(isset($_POST['publico'])){
                $datosPeli["publico"] = $_POST['publico'];
            }else{
                $publico = '';
            }
            if(isset($_POST['sinopsis'])){
                $datosPeli["sinopsis"] = $_POST['sinopsis'];
            }else{
                $sinopsis = '';
            }

        }

        return $datosPeli;
    }

?>
            