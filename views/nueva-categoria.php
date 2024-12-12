<h2>Nueva Categoria</h2>
    <form action="" class="" id="frmRegistrar">  
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="detalle">Detalle:</label><br>
        <textarea id="detalle" name="detalle" rows="4" cols="50" required></textarea><br><br>

        <button type="submit"  class="btn btn-succes"
        onclick="registrar_categorias()">Registrar</button>

    </form>
    <script src="<?php echo BASEE_URL?>views/js/functions_categoria.js"></script>
   <!--  <script>registrar_categorias();</script> -->