<?php

/*
 * @author Rebeca Sánchez Pérez
 * @version 1.1
 * @since 19/02/2023
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
    $_SESSION['paginaAnterior'] = 'editarTrabajo';
    // Redirige a la página de mto trabajos
    $_SESSION['paginaActiva'] = 'consultarTrabajo';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se guarda el objeto trabajo que devuelve buscar un trabajo por codigo
$oTrabajoAEditar = TrabajoPDO::buscarTrabajoPorCod($_SESSION['codTrabajoActual']);

// Se almacena la información del Trabajo actual en las siguiente variables, para mostrarlas en el formulario
if ($oTrabajoAEditar) {
    $codTrabajoAEditar = $oTrabajoAEditar->getCodTrabajo();
    $descTrabajoAEditar = $oTrabajoAEditar->getDescTrabajo();
    $fechaCreacionAEditar = $oTrabajoAEditar->getFechaCreacion();
    $fechaInicioAEditar = $oTrabajoAEditar->getFechaInicio();
    $fechaFinAEditar = $oTrabajoAEditar->getFechaFin();
    $estadoAEditar = $oTrabajoAEditar->getEstado();
    $costeAEditar = $oTrabajoAEditar->getCoste();
    $fechaBajaAEditar = $oTrabajoAEditar->getFechaBaja();
}

// Declaracion de la variable de confirmación de envio de formulario correcto
$entradaOK = true;

if (isset($_REQUEST['aceptar'])) {
    $aErrores['DescTrabajo'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcion'], 255, 3, 1);
    $aErrores['Coste'] = validacionFormularios::comprobarFloat($_REQUEST['coste'], 9999999999, 0, 2, 2, 1);

// Recorremos el array de errores
    foreach ($aErrores as $campo => $error) {
        if ($error != null) { // Comprobamos que el campo no esté vacio
            $entradaOK = false; // En caso de que haya algún error le asignamos a entradaOK el valor false para que vuelva a rellenar el formulario
            $_REQUEST[$campo] = ""; // Limpiamos los campos del formulario
        }
    }
} else {
    $entradaOK = false; // Si el usuario no ha enviado el formulario asignamos a entradaOK el valor false para que rellene el formulario
}
if ($entradaOK) { // Si el usuario ha rellenado el formulario correctamente 
    // Usando el metodo 'modificarAnimal' de la clase 'AnimalPDO' para modificar el Animal
    TrabajoPDO::modificarTrabajo($_SESSION['codTrabajoActual'], $_REQUEST['descripcion'], $_REQUEST['coste']);
    $_SESSION['paginaAnterior'] = 'editarTrabajo'; // Almaceno la página anterior para poder volver
    $_SESSION['paginaActiva'] = 'consultarTrabajo'; // Asigno a la página en curso la pagina de consultarDepartamento
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

include $view['layout'];
?>

