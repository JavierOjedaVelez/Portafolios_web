async function indexLibros() {
    fetch('/api/v1/libros')
        .then(response =>{
            if(!response.ok){
                throw new Error("Error de servidor");
            }
            return response.json();
    })

    .then(libros =>{

        if(libros.data.length <= 0){
            const contenido = document.getElementById("contenido");
            contenido.innerHTML = "";

            const message = document.createElement("p");
            message.innerHTML = "No hay libros";

            contenido.appendChild(message);
        }else{
             const contenido = document.getElementById("contenido");

             contenido.innerHTML = "";

             const tablalibros = crearTabla(libros.data);
             contenido.appendChild(tablalibros);

             const a = document.createElement("a")
             a.href = "#"
            a.innerHTML = "volver"

             a.onclick = function(){
                limpiarContenido();
             }

             contenido.appendChild(a);
        }
    }).catch(error =>{
        console.error("Error al cargar los libros:", error);
    })
}


function crearTabla(libros) {
    const tabla = document.createElement("table");
    tabla.setAttribute('class', 'table');
    const cabecera = crearFila(['titulo', 'precio', 'portada', 'fecha de publicacion'], "th");
    cabecera.setAttribute('scope','col');
    tabla.appendChild(cabecera);


    libros.forEach(libro=> {

        const fila = crearFila([libro['Titulo'], libro['Precio'], `<img src="{{ asset('storage/img/libros/' . $libro->portada) }}" alt="Portada del libro">`, libro['fecha de publicacion']], "td");
        tabla.appendChild(fila);




    });
    return tabla;
}

function crearFila(campos, tipo) {
    const fila = document.createElement("tr");


    campos.forEach(campo => {
        const celda = document.createElement(tipo);
        celda.id = campo;
        celda.innerHTML = campo;
        fila.appendChild(celda);
    });



    return fila;
}

function limpiarContenido(){
    document.getElementById("contenido").innerHTML = "";
}

async function login() {
    try {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        const params = new URLSearchParams();
        params.append("email", email);
        params.append("password", password);

        const response = await fetch("/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "X-CSRF-TOKEN": token
            },
            body: params.toString()
        });

        const data = await response.json();

        if (data.success) {
            alert("Inicio de sesión exitoso");
            window.location.href = "/";
        } else {
            alert("Revise usuario y contraseña");
        }
    } catch (error) {
        console.error("Error en la petición:", error);
    }

    return false;
}

async function logout() {
    try {
        const response = await fetch("/logout", {
            method: "GET"
        });

        if (response.ok) {
            const data = await response.json();


            if (data.success == true) {
                alert("Sesión cerrada con éxito");
                window.location.href = "/";
            } else {
                alert("Error: No se pudo cerrar la sesión");
            }
        } else {
            console.error("Error en la respuesta: ", response.status);
        }
    } catch (error) {
        console.error("Error en la petición:", error);
    }
}

async function Registrarse() {
    try {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const nombre = document.getElementById("name").value;
        const password = document.getElementById("password").value;
        const email = document.getElementById("email").value;
        const direccion = document.getElementById("direccion").value;
        const telefono = document.getElementById("telefono").value;

        const params = new URLSearchParams();
        params.append("nombre", nombre);
        params.append("password", password);
        params.append("email", email);
        params.append("direccion", direccion);
        params.append("telefono", telefono);

        const response = await fetch("/registrarse", {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'X-CSRF-TOKEN': token
            },
            body: params.toString()
        });

        if (response.ok) {
            const data = await response.json();

            if (data.success) {
                alert("Se ha registrado con éxito");
                window.location.href = "/iniciarsesion"; 
            } else {
                alert("Se produjo un error al registrarse");
            }
        } else {
            console.error("Error en la respuesta: ", response.status);
        }
    } catch (error) {
        console.error("Error en la petición:", error);
    }

    return false;
}

