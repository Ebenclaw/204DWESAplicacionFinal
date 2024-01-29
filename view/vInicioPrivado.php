<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 25/01/2024
 */
?>
<h2>INICIO PRIVADO</h2>
</header>
<main class="inicioPrivado">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formInicioPrivado" method="post">
            <button type="submit" name="cerrarSesion" class="botonCerrarSesion">CERRAR SESIÓN</button>
            <button type="submit" name="mtoDepartamento" class="botonMtoDepartamento">MTO. DEPARTAMENTOS</button>
            <button type="submit" name="detalle" class="botonDetalle">DETALLE</button>
            <button type="submit" name="editarPerfil" class="botonEditarPerfil">EDITAR PERFIL</button>
            <button type="submit" name="rest" class="botonRest">REST - AEMET</button>
        </form>
        <div class="mensajeBienvenida">
            <?php
            echo $avInicioPrivado['bienvenida'];
            echo $avInicioPrivado['numConexiones'];
            echo $avInicioPrivado['ultimaConexion'];
            ?>
        </div>
    </div>