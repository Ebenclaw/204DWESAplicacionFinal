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
    $_SESSION['paginaAnterior'] = 'eliminarTrabajo';
    // Redirige a la página de mto trabajos
    $_SESSION['paginaActiva'] = 'consultarTrabajo';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se busca en la base de datos el trabajo seleccionado y se guarda en un objeto
$oTrabajoAEliminar = TrabajoPDO::buscarTrabajoPorCod($_SESSION['codTrabajoActual']);

// Almaceno la información del Animal actual en las siguiente variables, para mostrarlas en el formulario
if ($oTrabajoAEliminar) {
    $codTrabajoAEliminar = $oTrabajoAEliminar->getCodTrabajo();
    $descTrabajoAEliminar = $oTrabajoAEliminar->getDescTrabajo();
    $fechaCreacionAEliminar = $oTrabajoAEliminar->getFechaCreacion();
    $fechaInicioAEliminar = $oTrabajoAEliminar->getFechaInicio();
    $fechaFinAEliminar = $oTrabajoAEliminar->getFechaFin();
    $estadoAEliminar = $oTrabajoAEliminar->getEstado();
    $costeAEliminar = $oTrabajoAEliminar->getCoste();
    $fechaBajaAEliminar = $oTrabajoAEliminar->getFechaBaja();
}

if (isset($_REQUEST['aceptarBorrado'])) {
    // Y usando el metodo 'bajaFisicaAnimal' de la clase 'AnimalPDO' eliminamos el Animal
    TrabajoPDO::bajaFisicaTrabajo($_SESSION['codTrabajoActual']);
    $_SESSION['paginaAnterior'] = 'eliminarTrabajo'; 
    $_SESSION['paginaActiva'] = 'consultarTrabajo'; 
    header('Location: index.php'); 
    exit;
}

include $view['layout'];
?>

