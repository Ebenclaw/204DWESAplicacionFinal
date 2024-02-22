<?php

/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 22/02/2024
 */

//Si el usuario pulsa el botón 'Cambiar Contraseña', mando al usuario al index de DWES
if (isset($_REQUEST['cambiarContraseña'])) {
    $_SESSION['paginaAnterior'] = 'miCuenta';
    $_SESSION['paginaActiva'] = 'cambiarContraseña'; // Asigno a la página en curso la pagina de cambiarContraseña
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Declaracion de la variable de confirmación de envio de formulario correcto
$entradaOK = true;

// Declaramos el array de errores y lo inicializamos vacío
$aErrores['T01_DescUsuario'] = "";

//Si el usuario pulsa el botón 'Confirmar Cambios', mando al usuario al index de DWES
if (isset($_REQUEST['confirmarCambios'])) {
    $aErrores['T01_DescUsuario'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['T01_DescUsuario'], 255, 3, 0);

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
// Si la entrada esta correcta iniciamos la modificación del la descripción del usuario
if ($entradaOK) {
    // Utilizamos el método 'modificarUsuario()' de la clase 'UsuarioPDO' para cambiar la descripción y almacenarla en la variable de sesión
    $_SESSION['user204DWESLoginLogout'] = UsuarioPDO::modificarUsuario($_SESSION['user204DWESLoginLogout'], $_REQUEST['T01_DescUsuario']);
    $_SESSION['paginaAnterior'] = 'miCuenta';
    $_SESSION['paginaActiva'] = 'inicioPrivado'; // Asigno a la página en curso la pagina de inicioPrivado
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

//Si el usuario pulsa el botón 'Cancelar', mando al usuario al index de DWES
if (isset($_REQUEST['salirMiCuenta'])) {
    $_SESSION['paginaAnterior'] = 'miCuenta';
    $_SESSION['paginaActiva'] = 'inicioPrivado'; // Asigno a la página en curso la pagina de inicioPrivado
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

//Si el usuario pulsa el botón 'Eliminar Usuario', mando al usuario al index de DWES
if (isset($_REQUEST['eliminarU'])) {
    $_SESSION['paginaAnterior'] = 'miCuenta';
    $_SESSION['paginaActiva'] = 'borrarCuenta'; // Asigno a la página en curso la pagina de borrarCuenta
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Almaceno...
$aVMiCuenta = [
    'codigoUsuarioActual' => $_SESSION['user204DWESLoginLogout']->getCodUsuario(), // Código del usuario actual
    'contraseñaUsuarioActual' => $_SESSION['user204DWESLoginLogout']->getPassword(), // Contraseña del usuario actual
    'descripcionUsuarioActual' => $_SESSION['user204DWESLoginLogout']->getDescUsuario(), // Descripción del usuario actual
    'nConexionesUsuarioActual' => $_SESSION['user204DWESLoginLogout']->getNumAcceso(), // Numero de conexiones del usuario actual
    'fechaHoraUltimaConexionAnteriorUsuarioActual' => $_SESSION['user204DWESLoginLogout']->getFechaHoraUltimaConexionAnterior() // Fecha/Hora conexión anterior del usuario actual
];

// Se muestra la vista del Layout
require_once $view['layout'];
