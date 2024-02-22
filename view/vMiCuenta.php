<?php
/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 22/02/2024
 */
?>
<h2>MI CUENTA</h2>
</header>
<main class="miCuenta">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formModTrabajo" method="post">
            <table>
                <tr>
                    <td class="titulo">USUARIO</td>
                    <td><input value="<?php echo ($aVMiCuenta['codigoUsuarioActual']); ?>" id="cod" class="obligatorio" type="text" name="user" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">CONTRASEÑA</td>
                    <td><input value="<?php echo ($aVMiCuenta['contraseñaUsuarioActual']); ?>" id="desc" class="obligatorio" type="password" name="passwordUsuarioAEditar" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">DESCRIPCION</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["T01_DescUsuario"]) ? $aErrores["T01_DescUsuario"] : ''); ?>" value="<?php echo ($aVMiCuenta['descripcionUsuarioActual']); ?>" id="fcreacion" class="obligatorio" type="text" name="T01_DescUsuario"></td>
                </tr>
                <tr>
                    <td class="titulo">NÚMERO DE CONEXIONES</td>
                    <td><input value="<?php echo ($aVMiCuenta['nConexionesUsuarioActual']); ?>" id="finicio" class="obligatorio" type="text" name="nConexionesUsuarioAEditar" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA Y HORA DE ULTIMA CONEXION</td>
                    <td><input value="<?php echo ($aVMiCuenta['fechaHoraUltimaConexionAnteriorUsuarioActual']); ?>" id="ffin" class="obligatorio" type="text" name="fechaHoraUltimaConexionAnteriorUsuarioAEditar" disabled></td>
                </tr>
            </table>
            <button type="submit" name="salirMiCuenta" class="botones">CANCELAR</button>
            <button type="submit" name="confirmarCambios" class="botones">CONFIRMAR CAMBIOS</button>
            <button type="submit" name="cambiarContraseña" class="botones">CAMBIAR CONTRASEÑA</button>
            <button type="submit" name="eliminarU" class="botones">ELIMINAR USUARIO</button>
        </form>
    </div>