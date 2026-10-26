<?php
// Archivo: controller/InvitacionController.php
class InvitacionController {
    public function mostrarInvitacion() {
        $vista = isset($_GET['view']) ? $_GET['view'] : 'sobre';

        if ($vista === 'invitacion') {
            require_once 'view/public/invitacion.php';
        } else {
            require_once 'view/public/sobre.php';
        }
    }
}
?>