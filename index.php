<?php

if (!isset($_SESSION)) {
	session_start();
}

require_once 'controller/plantilla.controller.php';
require_once 'controller/login-admin.controller.php';

require_once 'model/conexion.php';
require_once 'model/login-admin.model.php';

$plantilla = new Plantilla();
$plantilla -> plantilla();