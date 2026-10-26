<?php
// Archivo: view/partials/header.php

// 1. INICIO DE SESIÓN SEGURO
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 2. CONTROL DE CACHÉ DEL NAVEGADOR
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// 3. VERIFICACIÓN DE SESIÓN Y TIEMPO DE INACTIVIDAD
$tiempo_limite_inactividad = 30 * 60; // 30 minutos



// Agrega esto temporalmente para que el panel funcione sin login
$_SESSION['id_usuario'] = 1;
$nombreUsuario = 'Administrador Boda';
$rolUsuario = 'Administrador';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeviSoft - Horarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <header class="bg-gray-800 text-white shadow-lg">
        <div class="container mx-auto flex items-center justify-between p-4">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold">LeviSoft</h1>
            </div>

            <nav class="hidden md:flex space-x-4">
                <?php if ($rolUsuario === 'Administrador') : ?>
                    <a href="dashboard.php" class="px-3 py-2 rounded hover:bg-gray-700">Dashboard</a>
                    <a href="movimientos.php" class="px-3 py-2 rounded hover:bg-gray-700">Profesores</a>
                    <a href="productos.php" class="px-3 py-2 rounded hover:bg-gray-700">Horario</a>
                <?php endif; ?>
                
                <?php if ($rolUsuario === 'Administrador') : ?>
                    <a href="usuarios.php" class="px-3 py-2 rounded hover:bg-gray-700">Usuarios</a>
                <?php endif; ?>
            </nav>

            <div class="flex items-center space-x-4">
                <span class="hidden sm:inline">Hola, <?php echo htmlspecialchars($nombreUsuario); ?></span>

                <a href="../../controller/logout.php" class="bg-red-600 px-3 py-2 rounded hover:bg-red-700" title="Cerrar Sesión">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                
                <button id="btnMenuMovil" class="md:hidden text-white hover:text-gray-300">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
            </div>
        </div>

        <div id="menuMovil" class="hidden md:hidden bg-gray-700">
            <?php if ($rolUsuario === 'Administrador') : ?>
                    <a href="dashboard.php" class="px-3 py-2 rounded hover:bg-gray-700">Dashboard</a>
                    <a href="movimientos.php" class="px-3 py-2 rounded hover:bg-gray-700">Profesores</a>
                    <a href="productos.php" class="px-3 py-2 rounded hover:bg-gray-700">Horario</a>
            <?php endif; ?>
            <?php if ($rolUsuario === 'Administrador') : ?>
            <a href="usuarios.php" class="block px-4 py-2 text-white hover:bg-gray-600">Usuarios</a>
            <?php endif; ?>
        </div>
    </header>

    <main class="container mx-auto p-4 flex-grow">