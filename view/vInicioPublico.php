<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 22/01/2023
 */
?>
<h2>Inicio Publico</h2>
</header>
<main class="inicioPublico">
    <div class="container">
        <form name="inicioPublico" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formInicioPublico" method="post">
            <button type="submit" value="ES" name="castellano"><img src="webroot/image/español.png" alt="esp" class="fotoIdioma"></button>
            <button type="submit" value="EN" name="ingles"><img src="webroot/image/ingles.png" alt="eng" class="fotoIdioma"></button>
        </form>
        <div class="carousel">
            <div><img src="webroot/image/" alt="catalogo de requisitos"></div>
            <div><img src="webroot/image/" alt="diagrama casos de uso"></div>
            <div><img src="webroot/image/" alt="diagrama de clases"></div>
            <div><img src="webroot/image/" alt="arbol de navegacion"></div>
            <div><img src="webroot/image/" alt="mapa web"></div>
            <div><img src="webroot/image/" alt="estructura"></div>
            <div><img src="webroot/image/" alt="modelo fisico de datos"></div>
            <div><img src="webroot/image/" alt="uso de SESSION"></div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formInicioPublico" method="post">
            <button type="submit" name="login" class="botonIniciarSesion">Iniciar Sesion</button>
        </form>
    </div>