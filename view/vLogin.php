<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.2
 * @since 15/01/2024
 */
?>
<h2>LOGIN</h2>
</header>
<main class="login">
    <div class="container">
        <div class="formulacioInicioSesion">
            <h3>ACCEDE A TU CUENTA</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formLogin" method="post">
                <table>
                    <tr>
                        <td><input placeholder="USUARIO" class="obligatorio" type="text" name="usuario" value="<?php echo (isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td><input placeholder="CONTRASEÑA" class="obligatorio" type="password" name="password" value="<?php echo (isset($_REQUEST['password']) ? $_REQUEST['password'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="inicioPrivado" class="botonInicioPrivado">Inicio Privado</button></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="cancel" class="botonCancelar">Cancelar</button></td>
                        </tr>
                </table>
            </form>
        </div>
        <div class="formulacioInicioSesion">
            <h3>¿NECESITAS UNA CUENTA?</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formLogin" method="post">
                <td><button type="submit" name="registrarse" class="botonRegistro">Registrate</button></td>
            </form>
        </div>
    </div>