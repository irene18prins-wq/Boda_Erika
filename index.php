<?php
// Archivo: index.php
// Cargamos directamente la invitación de boda como página principal
require_once 'controller/InvitacionController.php';

$controller = new InvitacionController();
$controller->mostrarInvitacion();
?>