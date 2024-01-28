<?php

/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 21/01/2024
 */

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaAnterior'] = 'rest'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaActual'] = 'inicioPrivado'; // Asigno a la página en curso la pagina de inicioPrivado
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

    // 372745 -> Salamanca
    // $codigoBenavente = '490219';
    // 492755 -> Zamora
    // 240896 ->Leon
    $_SESSION['apiAEMET'] = REST::apiAEMET(); //$_REQUEST['municipìo']
    exit;

include $view['layout'];
?>

