<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 17/01/2023
 */
  if(isset($_REQUEST['volver'])){
        $_SESSION['paginaActiva'] = 'inicioPublico';
        header('location: index.php');
        exit;
    }

    include $view['layout'];
?>