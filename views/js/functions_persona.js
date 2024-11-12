async function registrar_producto() {
    let Nro_Identidad = document.getElementById('#').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provicincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let codPostal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let contraseña = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fecha_reg = document.querySelector('#fecha_reg').value;
    if ( Nro_Identidad == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" ||  provicincia == "" || distrito == "" || codPostal == "" ||  rol == ""|| contraseña == ""|| estado == ""|| fecha_reg == "") {
        alert("error, campos vacios");
        return;
    }try {
        const datos = new FormData(form-group); // capturamos datos del formulario html
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje,"success");
        }else{
            swal("Registro", json.mensaje,"error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrio un error" +e);
    }

    
    
}