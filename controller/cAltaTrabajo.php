<?php

/*
 * @author Rebeca Sánchez Pérez
 * @version 1.1
 * @since 22/02/2023
 */

// Se controla que el usuario haya sido logeado
if (empty($_SESSION['user204DWESLoginLogout'])) {
    // Redirige a la página de inicio
    $_SESSION['paginaActiva'] = 'inicioPublico';
    // Se carga el index
    header('Location: index.php');
    exit();
}

if (isset($_REQUEST['cancelar'])) {
    // Se guarda el modificar trabajos como la pagina anterior
    $_SESSION['paginaAnterior'] = 'editarTrabajo';
    // Redirige a la página de mto trabajos
    $_SESSION['paginaActiva'] = 'consultarTrabajo';
    // Se carga el index
    header('Location: index.php');
    exit();
}


include $view['layout'];
?>

