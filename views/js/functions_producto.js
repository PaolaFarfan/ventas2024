async function listar_productos() { // recien agreado
    try {
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
         let json =await respuesta.json();
         if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item =>{
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila"+item.id;
                cont+=1;
                nueva_fila.innerHTML =`
                <th>${cont}</th>
                <td>${item.codigo}</td>
                <td>${item.nombre}</td>
                <td>${item.stock}</td>
                <td>${item.categoria.nombre}</td>
                <td>${item.id_proveedor}</td>
                <td></td>
                `;
                document.querySelector('#tbl_producto').appendChild(nueva_fila);
            });
         }
         console.log(json);
    } catch (error) {
        console.log("oops salio un error" + error);
    }
}
if (document.querySelector('#tbl_producto')) {
    listar_productos();
} // hasta aqui
async function registrar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let fecha_v = document.querySelector('#fecha_v').value;
    let imagen = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;
    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || categoria == "" || fecha_v == "" || imagen == "" || proveedor == "") {
        alert("error, campos vacios");
        return;
    }
    try {
        const datos = new FormData(frmRegistrar); // capturamos datos del formulario html
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

async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';

            datos.forEach(element => {
                contenido_select += '<option value="'+ element.id +'">'+ element.nombre +'</option>';
                // SE TRABAJA CON JQUERY
                /*   $('#categoria').append($('<option />',{
                    text:`${element.nombre}`,
                    value:`${element.id}`
                })); */

            });
            document.getElementById('categoria').innerHTML = contenido_select;

        }

        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar categoria" +e);
    }
}

// listar proveedor

async function listar_proveedor() {
    try {
        let respuesta = await fetch(base_url + 'controller/proveedor.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
                //se trabaja con jquery
                /*$('#proveedor').append($('<option />',{
                    text: ${element.nombre},
                    value: ${element.id}
                }));*/
            });
            document.getElementById('proveedor').innerHTML = contenido_select;
        }

        console.log(respuesta);

    } catch (e) {
        console.log("Error al cargar proveedores: " +e);
    }
}
