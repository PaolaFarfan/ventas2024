
    <style>
        .producto {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .productos {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 200px;
        }
        
    </style>

    <div class="producto">
        <div class="productos">
            <p>Registrar Nuevo Producto</p>
            <a href="<?php echo BASEE_URL ?>nuevo-producto" class="btn btn-primary">Ver Nuevo Registro</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Persona/Usuario</p>
            <a href="<?php echo BASEE_URL ?>nueva-persona" class="btn btn-primary">Ver Nueva Persona</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Categoría</p>
            <a href="<?php echo BASEE_URL ?>nueva-categoria" class="btn btn-primary">Ver Nueva Categoria</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Compra/Venta</p>
            <a href="<?php echo BASEE_URL ?>nueva-compra" class="btn btn-primary">Ver Nueva Compra</a>
        </div>
    </div>
    <br><br>




