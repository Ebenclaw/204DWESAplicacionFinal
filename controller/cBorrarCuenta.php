<?php
/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 22/02/2024
 */

//Si el usuario pulsa el botón 'Cancelar', mando al usuario al index de DWES
if(isset($_REQUEST['salirBorrarCuenta'])){ 
    $_SESSION['paginaAnterior'] = 'borrarCuenta';
    $_SESSION['paginaActiva'] = 'miCuenta'; // Asigno a la página en curso la pagina de inicioPrivado
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

if (isset($_REQUEST['eliminarUsuario'])) { // Comprobamos que el usuario a pulsado el boton 'Eliminar Usuario'
    $oUsuarioAEliminar = $_SESSION['user204DWESLoginLogout']->getCodUsuario(); // Recupero y almaceno el código del usuario actual
    
    if (UsuarioPDO::borrarUsuario($oUsuarioAEliminar)) {
        session_destroy(); // Elimino la sesión
        $_SESSION['paginaAnterior'] = 'borrarCuenta';
        $_SESSION['paginaActiva'] = 'inicioPublico'; // Asigno a la pagina en curso la pagina de inicioPublico
        header('Location: index.php'); // Redirecciono al index de la APP
        exit;
    }
}

// Se muestra la vista del Layout
require_once $view['layout'];