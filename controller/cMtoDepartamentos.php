<?php
/*
 * @author Rebeca Sánchez Pérez, Ismael Ferreras García, Carlos García Cachón
 * @version 1.1
 * @since 07/02/2023
 */

// Se controla que el usuario haya sido logeado
if (empty($_SESSION['user204DWESLoginLogout'])) {
    // Redirige a la página de inicio
    $_SESSION['paginaActiva'] = 'inicioPublico';
    // Se carga el index
    header('Location: index.php');
    exit();
}



include $view['layout'];
?>

