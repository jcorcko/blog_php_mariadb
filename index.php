<?php
require_once "config/config.php";
require_once "./controladores/VistaPrincipal.php";
require_once "./controladores/PreguntaController.php";
require_once "./modelos/Pregunta.php";
$vista = new VistaPrincipal();
$vista->CargarVista();