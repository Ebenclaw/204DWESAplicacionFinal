<?php

/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 21/01/2024
 */

// Se controla que el usuario haya sido logeado
if (empty($_SESSION['user204DWESLoginLogout'])) {
    // Redirige a la página de inicio
    $_SESSION['paginaActiva'] = 'inicioPublico';
    // Se carga el index
    header('Location: index.php');
    exit();
}

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaAnterior'] = 'rest'; // Almaceno la página anterior para poder volver
    // Redirige a la página de inicio privado
    $_SESSION['paginaActiva'] = 'inicioPrivado';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Si se solicita la API de la AEMET
if (isset($_REQUEST['solicitarMunicipio'])) {
    // El value devuelto por el select del municipio se guarda en la sesion
    $_SESSION['municipioSeleccionado'] = $_REQUEST['municipio'];
    // Se recarga la pagina
    header('Location: index.php');
    exit();
}

// Si se solicita la API del horoscopo
if (isset($_REQUEST['solicitarHoroscopo'])) {
    // El value devuelto por el select del signo del zodiaco se guarda en la sesion
    $_SESSION['signoZodiacoSeleccionado'] = $_REQUEST['signoZodiacoSeleccionado'];
    // El value devuelto por el select del municipio se guarda en la sesion
    $_SESSION['fechaZodiacoSeleccionada'] = $_REQUEST['fechaZodiacoSeleccionada'];
    // Se recarga la pagina
    header('Location: index.php');
    exit();
}

// Se instancia el array que usara la vista para mostrar la informacion
$aVistaRest = [
    'apiAEMET' => [],
    'apiHoroscopo' => []
];

if (isset($_SESSION['municipioSeleccionado']) && $_SESSION['municipioSeleccionado']!= null) {
    // Se hace la llamada a la API de la AEMET y se guarda en un array que usara la vista
    $aVistaRest['apiAEMET'] = REST::apiAEMET($_SESSION['municipioSeleccionado']); //param->($municipio)
}

if (isset($_SESSION['signoZodiacoSeleccionado']) && $_SESSION['signoZodiacoSeleccionado']!= null && isset($_SESSION['fechaZodiacoSeleccionada']) &&  $_SESSION['fechaZodiacoSeleccionada']!= null) {
    // Se hace la llamada a la API del horoscopo y se guarda en un array que usara la vista
    $aVistaRest['apiHoroscopo'] = REST::apiHoroscopo($_SESSION['signoZodiacoSeleccionado'], $_SESSION['fechaZodiacoSeleccionada']); //param->($signo,$fecha)   
}

include $view['layout'];
?>

