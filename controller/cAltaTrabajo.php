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
    $_SESSION['paginaAnterior'] = 'añadirTrabajo';
    // Redirige a la página de mto trabajos
    $_SESSION['paginaActiva'] = 'consultarTrabajo';
    // Se carga el index
    header('Location: index.php');
    exit();
}

$entradaOK = true;

$aErrores=[
    'CodTrabajo' => '',
    'descTrabajo' => '',
    'coste' => '',
    'estado' => ''
];
//$fechaYHoraActualCreacion = new DateTime('now', new DateTimeZone('Europe/Madrid'));

if (isset($_REQUEST['darDeAlta'])) {
    
    $aErrores['CodTrabajo'] = validacionFormularios::comprobarAlfanumerico($_REQUEST['codigo'], 3, 3, 1);

    if ($aErrores['CodTrabajo'] == null) {
        if (TrabajoPDO::buscarTrabajoPorCod($_REQUEST['codigo'])) {
            $aErrores['CodTrabajo'] = "El código de Trabajo ya existe";
            $_REQUEST['codigo'] = "";
        }
    }
    $aErrores['descTrabajo'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcion'], 255, 1, 1);
    $aErrores['fechaCreacion'] = validacionFormularios::comprobarNoVacio($_REQUEST['fechaCreacion']);
    $aErrores['fechaInicio'] = validacionFormularios::comprobarNoVacio($_REQUEST['fechaInicio']);
    $aErrores['fechaFin'] = validacionFormularios::comprobarNoVacio($_REQUEST['fechaFin']);
    $aErrores['coste'] = validacionFormularios::comprobarFloat($_REQUEST['coste'], 9999999999, 0, 1);
    
    if (!isset($_REQUEST['estado'])) {$aErrores['estado'] = "Debes elegir al menos 1 opción.";}
    
    $aErrores['estado'] = validacionFormularios::comprobarAlfabetico($_REQUEST['estado'], 255, 3, 1);
    
    foreach ($aErrores as $campo => $error) {
        if ($error != null) {
            $_REQUEST[$campo] = "";
            $entradaOK = false;
        }
    }
} else {
    $entradaOK = false;
}
//En caso de que '$entradaOK' sea true
if ($entradaOK) {
    // Usando el metodo 'altaAnimal' de la clase 'AnimalPDO' añadimos el Animal
    $oTrabajoNuevo = TrabajoPDO::altaTrabajo($_REQUEST['codigo'], $_REQUEST['descripcion'], $_REQUEST['fechaCreacion'], $_REQUEST['fechaInicio'], $_REQUEST['fechaFin'], $_REQUEST['estado'], $_REQUEST['coste']);
    if ($oTrabajoNuevo) {
        $_SESSION['paginaAnterior'] = 'añadirTrabajo'; 
        $_SESSION['paginaActiva'] = 'consultarTrabajo'; 
        header('Location: index.php'); 
        exit;
    } 
}

include $view['layout'];
?>

