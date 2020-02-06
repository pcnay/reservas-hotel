<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

// Se agregan estos archivos "banner.modelo.php" y "banner.controlador.php" para las clases que se utilizan en la vistas que llaman al Controlador y a su vez Al Modelo
require_once "modelos/banner.modelo.php";
require_once "controladores/banner.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
