<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 21/01/2023
 */
?>
<h2>REGISTRO</h2>
</header>
<main class="registro">
    <div class="container">
        <div class="formulacioRegistro">
            <h3>DATOS PERSONALES</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRegistro" method="post">
                <table>
                    <tr>
                        <td><input placeholder="USUARIO" class="obligatorio" type="text" name="newUsuario" value="<?php echo (isset($_REQUEST['newUsuario']) ? $_REQUEST['newUsuario'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td><input placeholder="DESCRIPCIÓN DE USUARIO" class="obligatorio" type="text" name="newDescUsuario" value="<?php echo (isset($_REQUEST['newDescUsuario']) ? $_REQUEST['newDescUsuario'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td><input placeholder="CONTRASEÑA" class="obligatorio" type="password" name="newPassword" value="<?php echo (isset($_REQUEST['newPassword']) ? $_REQUEST['newPassword'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td><input placeholder="REPETIR CONTRASEÑA" class="obligatorio" type="password" name="newPassword2" value="<?php echo (isset($_REQUEST['newPassword2']) ? $_REQUEST['newPassword2'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="registrarse" class="botonRegistrarse">CREAR USUARIO</button></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="cancel" class="botonCancelar">CANCELAR</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>