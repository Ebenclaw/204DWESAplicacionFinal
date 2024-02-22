<?php
/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 22/02/2024
 */
?>
<h2>CAMBIAR CONTRASEÑA</h2>
</header>
<main class="cambiarPass">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formModTrabajo" method="post">
            <table>
                <tr>
                    <td class="titulo">CONTRASEÑA ACTUAL</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["contraseñaActual"]) ? $aErrores["contraseñaActual"] : ''); ?>" value="<?php echo (isset($_REQUEST['contraseñaActual']) ? $_REQUEST['contraseñaActual'] : ''); ?>" id="cod" class="obligatorio" type="password" name="contraseñaActual"></td>
                </tr>
                <tr>
                    <td class="titulo">NUEVA CONTRASEÑA</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["nuevaContraseña"]) ? $aErrores["nuevaContraseña"] : ''); ?>" value="<?php echo (isset($_REQUEST['nuevaContraseña']) ? $_REQUEST['nuevaContraseña'] : ''); ?>" id="desc" class="obligatorio" type="password" name="nuevaContraseña"></td>
                </tr>
                <tr>
                    <td class="titulo">CONFIRMAR NUEVA CONTRASEÑA</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["repetirNuevaContraseña"]) ? $aErrores["repetirNuevaContraseña"] : ''); ?>" value="<?php echo (isset($_REQUEST['repetirNuevaContraseña']) ? $_REQUEST['repetirNuevaContraseña'] : ''); ?>" id="fcreacion" class="obligatorio" type="password" name="repetirNuevaContraseña"></td>
                </tr>
            </table>
            <button type="submit" name="salirCambiarContraseña" class="botones">CANCELAR</button>
            <button type="submit" name="confirmarCambios" class="botones">CONFIRMAR CAMBIOS</button>
        </form>
    </div>

