<?php
// Enrutador público para la invitación
require_once 'controller/InvitacionController.php';

$controller = new InvitacionController();
$controller->mostrarInvitacion();
?>