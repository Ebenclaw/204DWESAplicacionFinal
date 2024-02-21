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

if (isset($_REQUEST['aceptar'])) {
    // Se guarda el modificar trabajos como la pagina anterior
    $_SESSION['paginaAnterior'] = 'detalleTrabajo';
    // Redirige a la página de mto trabajos
    $_SESSION['paginaActiva'] = 'consultarTrabajo';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se busca en la base de datos el trabajo seleccionado y se guarda en un objeto
$oTrabajoAMostrar = TrabajoPDO::buscarTrabajoPorCod($_SESSION['codTrabajoActual']);

// Almaceno la información del Animal actual en las siguiente variables, para mostrarlas en el formulario
if ($oTrabajoAMostrar) {
    $codTrabajoAMostrar = $oTrabajoAMostrar->getCodTrabajo();
    $descTrabajoAMostrar = $oTrabajoAMostrar->getDescTrabajo();
    $fechaCreacionAMostrar = $oTrabajoAMostrar->getFechaCreacion();
    $fechaInicioAMostrar = $oTrabajoAMostrar->getFechaInicio();
    $fechaFinAMostrar = $oTrabajoAMostrar->getFechaFin();
    $estadoAMostrar = $oTrabajoAMostrar->getEstado();
    $costeAMostrar = $oTrabajoAMostrar->getCoste();
    $fechaBajaAMostrar = $oTrabajoAMostrar->getFechaBaja();
}

include $view['layout'];
?>

