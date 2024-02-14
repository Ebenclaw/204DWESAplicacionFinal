<?php

/*
 * @author Rebeca Sánchez Pérez
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

if (isset($_REQUEST['volver'])) {
    // Se guarda el mto departamentos como la pagina anterior
    $_SESSION['paginaAnterior'] = 'consultarDepartamento';
    // Redirige a la página de inicio privado
    $_SESSION['paginaActiva'] = 'inicioPrivado';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se instancia el array que usara la vista para mostrar la informacion
$aTrabajosBuscadosVista = [];

if (isset($_REQUEST['buscar'])) {
    $aTrabajosBuscados = TrabajoPDO::buscaTrabajosPorDesc($_REQUEST['busquedaSimple']);

    foreach ($aTrabajosBuscados as $oTrabajo) {//Recorro el objeto del resultado que contiene un array
        $aTrabajosBuscadosVista[] = [
            'codTrabajo' => $oTrabajo->getCodTrabajo(),
            'descTrabajo' => $oTrabajo->getDescTrabajo(),
            'fechaCreacion' => $oTrabajo->getFechaCreacion(),
            'fechaInicio' => $oTrabajo->getFechaInicio(),
            'fechaFin' => $oTrabajo->getFechaFin(),
            'estado' => $oTrabajo->getEstado(),
            'coste' => $oTrabajo->getCoste(),
            'fechaBaja' => !is_null($oTrabajo->getFechaBaja()) ? $oTrabajo->getFechaBaja() : ''
        ];
    }
    // Se carga el index
    header('Location: index.php');
    exit();
}

include $view['layout'];
?>

