<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 22/01/2024
 */
?>
<h2 class="tituloinicioPublico">INICIO PÚBLICO</h2>
</header>
<main class="inicioPublico">
    <form name="inicioPublico" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formInicioPublico" method="post">
        <button type="submit" value="ES" name="castellano">ESP</button>
        <button type="submit" value="EN" name="ingles">ENG</button>
        <button type="submit" name="login" class="botonIniciarSesion">INICIAR SESION</button>
    </form>
    <div class="wrapper">
        <h3>INFORMACIÓN RELAVANTE DE LA APP</h3>
        <table class="tablaInfo">
            <tr>
                <td>Catálogo de requisitos</td>
                <td><a href="doc/infoAPP/230129CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/image/pdf.png"></a></td>
            </tr>
            <tr>
                <td>Diagrama de casos de uso</td>
                <td><a href="doc/infoAPP/230129DiagramaDeCasosDeUso.pdf" target="_blank"><img src="webroot/image/pdf.png"></a></td>
            </tr>
            <tr>
                <td>Diagrama de clases</td>
                <td><a href="doc/infoAPP/230129DiagramaDeClases.pdf" target="_blank"><img src="webroot/image/pdf.png"></a></td>
            </tr>
            <tr>
                <td>Arbol de navegación</td>
                <td><a href="doc/infoAPP/230129ArbolDeNavegación.pdf" target="_blank"><img src="webroot/image/pdf.png"></a></td>
            </tr>
            <tr>
                <td>Relacion de ficheros</td>
                <td><a href="doc/infoAPP/230129RelacionDeFicheros.pdf" target="_blank"><img src="webroot/image/pdf.png"></a></td>
            </tr>
            <tr>
                <td>Estructura de almacenamiento</td>
                <td><a href="doc/infoAPP/230129EstandarDesarrolloDAWyEstructuraAlmacenamientoDWES.pdf" target="_blank"><img src="webroot/image/pdf.png"></a></td>
            </tr>
            <tr>
                <td>Modelo físico de datos</td>
                <td><a href="doc/infoAPP/ModeloFisicoDeDatos.pdf" target="_blank"><img src="webroot/image/pdf.png"></a></td>
            </tr>
            <tr>
                <td>Uso de $_SESSION</td>
                <td><a href="doc/infoAPP/UsoDeLaSesionAppRebeca.pdf" target="_blank"><img src="webroot/image/pdf.png"></a></td>
            </tr>
        </table>
    </div>
</main>
<div class="slider">
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
</div>