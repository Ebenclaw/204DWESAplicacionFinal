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

// Se comprueba que se ha pulsado el boton de busqueda
if (isset($_REQUEST['buscar'])) {
    // Se vacian los arrays para no guardar la busqueda anterior
    $aTrabajosBuscadosVista = [];
    $aTrabajosBuscados = [];

    // Se llama a la busqueda simple del modelo con el campo introducido en el input de busqueda
    $aTrabajosBuscados = TrabajoPDO::buscaTrabajosPorDesc($_REQUEST['busquedaSimple']);
    
// Si no se ha pulsado el boton, se guardan TODOS los trabajos
} else {
    // Se llama a la busqueda simple para listar TODOS los Trabajos
    $aTrabajosBuscados = TrabajoPDO::buscaTrabajosPorDesc();
}

// Se carga el array en un objeto para guardar los datos en el array de la vista
foreach ($aTrabajosBuscados as $oTrabajo) {
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


include $view['layout'];
?>

