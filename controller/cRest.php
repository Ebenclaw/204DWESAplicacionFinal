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
// Si se solicita la API de la AEMET
if (isset($_REQUEST['solicitarMunicipio'])) {
    $_SESSION['municipioSeleccionado'] = $_REQUEST['municipio'];
    $_SESSION['apiAEMET'] = REST::apiAEMET($_SESSION['municipioSeleccionado']); //param->($municipio)
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Si se solicita la API del horoscopo
if (isset($_REQUEST['solicitarHoroscopo'])) {
    $_SESSION['signoZodiacoSeleccionado'] = $_REQUEST['signoZodiacoSeleccionado'];
    $_SESSION['fechaZodiacoSeleccionada'] = $_REQUEST['fechaZodiacoSeleccionada'];
    $_SESSION['apiHoroscopo'] = REST::apiHoroscopo($_SESSION['signoZodiacoSeleccionado'],$_SESSION['fechaZodiacoSeleccionada']);//$_SESSION['signoZodiacoSeleccionado'],$_SESSION['fechaZodiacoSeleccionada']
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

include $view['layout'];
?>

