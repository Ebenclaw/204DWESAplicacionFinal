<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 07/02/2024
 */
?>
<h2>DEPARTAMENTOS</h2>
</header>
<main class="mtoDepartamentos">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formMto" method="post">
            <input placeholder="BUSCAR DEPARTAMENTO POR DESCRIPCIÓN" id="busquedaSimple" class="obligatorio" type="text" name="busquedaSimple" value="<?php echo(isset($_REQUEST['busquedaSimple'])?$_REQUEST['busquedaSimple']:'') ?>">
            <button type="submit" name="buscar" class="botones">BUSCAR</button>
        </form>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formMtoVolver" method="post">
            <button type="submit" name="volver" class="botones">VOLVER</button>
        </form>
        
        <div class="resultado">
            <?php
            var_dump($_SESSION['departamentosBuscados']);
            ?>
        </div>
    </div>