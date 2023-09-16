<?php
include_once($ruta_base."../configuraciones.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $ruta_base; ?>menu/styleCabecera.css">
    <link rel="stylesheet" href="<?php echo $ruta_base; ?>tp4/css/superStyle.css">
    <link rel="stylesheet" href="<?php echo $ruta_base; ?>menu/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="<?php echo $ruta_base; ?>menu/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
    <header>
        <nav>
            <ul class="menu-horizontal">
                <li><a href="<?php echo $ruta_base; ?>index.php">Inicio</a></li>
                
                <li>
                    <a href="#">Ejercicios tp1</a>
                    <ul class="menu-vertical">
                        <li><a href="<?php echo $ruta_base; ?>TP1/Ej1/Vista/Ejercicio1.php">ej1</a></li>
                        <li><a href="<?php echo $ruta_base; ?>TP1/Ej2/Vista/Ej2.php">ej2</a></li>
                        <li><a href="<?php echo $ruta_base; ?>TP1/Ej3/Vista/Ej3.php">ej3</a></li>
                        <li><a href="<?php echo $ruta_base; ?>TP1/Ej4/Vista/Ej4.php">ej4</a></li>
                        <li><a href="<?php echo $ruta_base; ?>TP1/Ej5/Vista/Ej5.php">ej5</a></li>
                        <li><a href="<?php echo $ruta_base; ?>TP1/Ej6/Vista/Ej6.php">ej6</a></li>
                        <li><a href="<?php echo $ruta_base; ?>TP1/Ej7/Vista/Ej7.php">ej7</a></li>
                        <li><a href="<?php echo $ruta_base; ?>TP1/Ej8/Vista/Ej8.php">ej8</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Ejercicio tp2</a>
                    <ul class="menu-vertical">
                        
                        <li>
                            <a href="#">ejercicio 2</a>
                            <ul class="submenu-vertical">
                                <li><a href="<?php echo $ruta_base;?>tp2/Ej2/punto1/Vista/punto1.php">Ej1</a></li>
                                <li><a href="<?php echo $ruta_base;?>tp2/Ej2/punto2/Vista/punto2.php">Ej2</a></li>
                                <li><a href="<?php echo $ruta_base;?>tp2/Ej2/punto3/Vista/punto3.php">Ej3</a></li>
                                <li><a href="<?php echo $ruta_base;?>tp2/Ej2/punto4/Vista/punto4.php">Ej4</a></li>
                                <li><a href="<?php echo $ruta_base;?>tp2/Ej2/punto5/Vista/punto5.php">Ej5</a></li>
                            </ul>
                            
                        </li>
                        <li><a href="<?php echo $ruta_base; ?>TP2/vista/ejercicio1.php">ej2</a></li>
                        <li><a href="<?php echo $ruta_base;?>tp2/Vista/ejercicio4.php">Ej3</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">Ejercicios tp3</a>
                    <ul class="menu-vertical">
                        <li><a href="<?php echo $ruta_base;?>tp3/vista/ejercicio1.php">Ej1</a></li>
                        <li><a href="<?php echo $ruta_base;?>tp3/vista/ejercicio2.php">Ej2</a></li>
                        <li><a href="<?php echo $ruta_base;?>tp2/vista/ejercicio4.php">Ej3</a></li>
                    </ul>
                </li>   
                <li>
                    <a href="#">Ejercicios tp4</a>
                    <ul class="menu-vertical">
                        
                        <li><a href="<?php echo $ruta_base; ?>tp4/autosPersona/autosPersona.php">Autos persona</a></li>
                        <li><a href="<?php echo $ruta_base; ?>tp4/buscarAutos/buscarAuto.php">Buscar autos</a></li>
                        <li><a href="<?php echo $ruta_base; ?>tp4/buscarPersona/buscarPersona.php">Buscar personas</a></li>
                        <li><a href="<?php echo $ruta_base; ?>tp4/cambioDuenio/cambioDuenio.php">Cambiar auto de dueño</a></li>
                        <li><a href="<?php echo $ruta_base; ?>tp4/listaPersona/listaPersona.php">Listar personas</a></li>
                        <li><a href="<?php echo $ruta_base; ?>tp4/nuevaPersona/nuevaPersona.php">Nueva persona</a></li>
                        <li><a href="<?php echo $ruta_base; ?>tp4/nuevoAuto/nuevoAuto.php">Nuevo auto</a></li>
                        <li><a href="<?php echo $ruta_base; ?>tp4/verAutos/verAutos.php">Ver autos</a></li>

                    </ul>
                </li>            
            </ul>
        </nav>
    </header>