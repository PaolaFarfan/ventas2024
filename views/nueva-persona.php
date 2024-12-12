<style>
/* Estilo del contenedor del formulario */
       
        h2 {
            text-align: center;
            color: #333;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            align-items: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="date"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus,
        input[type="password"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
        <h2>Registrar Nuevo Usuario</h2>
        <form action="" class="" id="frmPersona">  
            <div class="form-group">
                <label for="numero_identidad">Número de Identidad:</label>
                <input type="text" id="numero_identidad" name="numero_identidad" required>
            </div>

            <div class="form-group">
                <label for="razon_social">Razón Social:</label>
                <input type="text" id="razon_social" name="razon_social" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>

            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" id="departamento" name="departamento" required>
            </div>

            <div class="form-group">
                <label for="provincia">Provincia:</label>
                <input type="text" id="provincia" name="provincia" required>
            </div>

            <div class="form-group">
                <label for="distrito">Distrito:</label>
                <input type="text" id="distrito" name="distrito" required>
            </div>

            <div class="form-group">
                <label for="cod_postal">Código Postal:</label>
                <input type="text" id="cod_postal" name="cod_postal" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>

            <div class="form-group">
                <label for="rol">Rol:</label>
                <input type="text" id="rol" name="rol" required>   
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="botton"  class="btn btn-succes"
            onclick="registrar_persona();">Registrar</button>
        </form>
    </div>
    <script src="<?php echo BASEE_URL?>views/js/functions_persona.js"></script>
<!-- <script>registrar_persona();</script> -->