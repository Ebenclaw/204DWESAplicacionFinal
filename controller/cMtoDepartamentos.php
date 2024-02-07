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
$aVistaDepartamentos = [];

if (isset($_REQUEST['buscar'])) {
    $_SESSION['departamentosBuscados'] = DepartamentoPDO::buscaDepartamentosPorDesc($_REQUEST['busquedaSimple']);
    // Se carga el index
    header('Location: index.php');
    exit();
}

include $view['layout'];
?>

