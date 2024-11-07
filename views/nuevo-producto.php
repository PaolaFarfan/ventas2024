<style>
    button{
        background-color: #4CAF50;
        color: #fff;
        padding:10px 20px;
        border:none;
    }
    button:hover{
        background-color:#3e8e41;
    }
</style>
<form action="" class="" id="frmRegistrar">  

<div>
        <label for=""> Codigo </label> <br>
            <input type="number" placeholder="" id="codigo" name="codigo" class="form-control"><br>
    </div>
    <div>
        <label for=""> Nombre </label><br>
            <input type="text" placeholder="" id="nombre" name="nombre" class="form-control"><br>
    </div>
    <div>
        <label for=""> Detalle </label><br>
            <input name="detalle" id="detalle" class="form-control" require></input>
    </div>
    <div>
        <label for=""> Precio </label><br>
            <input type="text" placeholder="" id="precio" name="precio" class="form-control"><br>
    </div>
    <div>
        <label for=""> Stock Inicio </label><br>
            <input type="number" placeholder="" id="stock" name="stock"><br>
    </div>
    <div>
        <label for=""> Categoria </label><br>
        <select type="number"  class="form-control" required id="idcategoria" name="idcategoria"> 
                <option value=""> seleccione</option>
            </select>
    </div>
    <div>
        <label for=""> Fecha Vencimiento </label><br>
            <input type="date" placeholder="" id="fecha_v" name="fecha_v" class="form-control"><br>
    </di>
    <div>
        <label for=""> Imagen </label><br>
            <input type="text" placeholder=""  id="imagen" name="imagen" class="form-control"><br>
    </div>
    <div>
        <label for=""> Proveedor </label><br>
        <select type="number"  class="form-control" required id="idproveedor" name="idproveedor"> 
                <option value=""> seleccione</option>
            </select>
    </div> <br>
     <div>
        <button type="button" class="btn btn-succes"
         onclick="registrar_producto();">Registrar</button> 
</div>
</form>

<script src="<?php echo BASEE_URL?>views/js/functions_producto.js"></script>
<script> listar_categorias() ; </script>
<script> listar_proveedor() ; </script>
