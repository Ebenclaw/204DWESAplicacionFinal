<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 22/01/2024
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="webroot/css/style.css">
        <link rel="icon" type="image/x-icon" href="../webroot/image/flora.png">
        <title>Rebeca Sánchez Pérez</title>
    </head>

    <body>
        <header>
            <h1 id="tituloApp">APLICACION FINAL</h1>        
            <?php require_once $view[$_SESSION['paginaActiva']]; ?>
        
        <footer>
            <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../index.html">Rebeca Sánchez Pérez</a></div>
            <div id="fotos">
                
                <a href="doc/RSS.xml" target="_blank"><img id="rss" src="webroot/image/rss.png" alt="rss"></a>
                <a href="https://github.com/Ebenclaw/204DWESAplicacionFinal" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
                <a href="doc/index.html" target="_blank"><img id="doc" src="webroot/image/phpdoc.png" alt="PHPDoc"></a>
                <a href="doc/CurrículumRebecaSánchezPérez.pdf" target="_blank"><img id="curriculum" src="webroot/image/cv.png" alt="curriculum"></a>
                <a href="https://www.zara.com/es/" target="_blank"><img id="sauces" src="webroot/image/zara.jpg" alt="WebImitada"></a>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="formTecnologias">
                    <button type="submit" name="tecnologias" value="tecnologias" class="botontecnologias"><img alt="herramientas" src="webroot/image/tecnologias.jpg" /></button>
                </form>
                <!--<a href="../204DWESProyectoDWES/indexProyectoDWES.php"><img id="home" src="webroot/image/home.png" alt="Inicio"></a><img alt="herramientas" src="webroot/image/GitHub.png" />-->
            </div>
        </footer>
    </body>
</html>