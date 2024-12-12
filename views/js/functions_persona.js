//funcion para listar personas
async function listar_persona() { // recien agreado
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=listar');
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
                <td>${item.nro_identidad}</td>
                <td>${item.razon_social}</td>
                <td>${item.telefono}</td>
                <td>${item.correo}</td>
                <td>${item.departamento}</td>
                <td>${item.provincia}</td>
                <td>${item.distrito}</td>
                <td>${item.cod_postal}</td>
                <td>${item.direccion}</td>
                <td>${item.rol}</td>
                <td>${item.password}</td>
                <td>${item.options}</td>
                <td></td>
                `;
                document.querySelector('#tbl_persona').appendChild(nueva_fila);
            });
         }
         console.log(json);
    } catch (error) {
        console.log("oops salio un error" + error);
    }
}
if (document.querySelector('#tbl_persona')) {
    listar_persona();
} // hasta aqui


async function registrar_persona() {
    let nro_identidad = document.getElementById('#nro_identidad').value;
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

    if ( nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" ||  provicincia == "" || distrito == "" || codPostal == "" | direccion == "" ||  rol == ""|| contraseña == "") {
        alert("error, campos vacios");
        return;
    }try {
        const datos = new FormData(frmPersona); // capturamos datos del formulario html
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', {
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
async function ver_persona(id) {
    const formData = new FormData();
    formData.append('id_persona', id);
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData 
        });
        json =await respuesta.json();
        if (json.status) {
            document.querySelector('#numero_identidad').value= json.contenido.codigo;
        }else{
            window.location = base_url+"persona";
        }
        console.log(json);
        
    } catch (error) {
        console.log("oops ocurrio un error" +error);
    }
}
