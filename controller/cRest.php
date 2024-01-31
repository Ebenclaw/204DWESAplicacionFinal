<?php

/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 21/01/2024
 */

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaAnterior'] = 'rest'; // Almaceno la página anterior para poder volver
    // Redirige a la página de inicio privado
    $_SESSION['paginaActiva'] = 'inicioPrivado';
    // Se carga el index
    header('Location: index.php');
    exit();
}

    // 372745 -> Salamanca
    // $codigoBenavente = '490219';
    // 492755 -> Zamora
    // 240896 ->Leon
if (isset($_REQUEST['solicitar'])) {
    $_SESSION['municipioSeleccionado'] = $_REQUEST['municipio'];
    $_SESSION['apiAEMET'] = REST::apiAEMET($_SESSION['municipioSeleccionado']); //$_REQUEST['municipìo']
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

include $view['layout'];
?>

