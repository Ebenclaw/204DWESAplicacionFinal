<?php
/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 22/02/2024
 */
?>
<h2>BORRAR CUENTA</h2>
</header>
<main class="borrarCuenta">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formModTrabajo" method="post">
            <h3>¿ESTÁ SEGURO DE QUE DESEA ELIMINAR SU CUENTA?</h3>
            <button type="submit" name="salirBorrarCuenta" class="botones">CANCELAR</button>
            <button type="submit" name="eliminarUsuario" class="botones botonBorrar">ELEMINAR CUENTA</button>
        </form>
    </div>

