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
    const cabecera = crearFila(['titulo', 'precio', 'portada', 'fecha de publicacion', 'acciones'], "th");
    cabecera.setAttribute('scope','col');
    tabla.appendChild(cabecera);


    libros.forEach(libro=> {
        const enlaceTitulo = `<a href="/libros/${libro.isbn}/show" class="text-decoration-none">${libro.Titulo}</a>`;
        const portada =`<img src="{{ asset('storage/img/libros/' . $libro->portada) }}" alt="Portada del libro">`
        const fila = crearFila([enlaceTitulo, libro['Precio'],  portada, libro['fecha de publicacion']], "td", libro);
        tabla.appendChild(fila);




    });
    return tabla;
}

function crearFila(campos, tipo, libro) {
    const fila = document.createElement("tr");


    campos.forEach(campo => {
        const celda = document.createElement(tipo);
        celda.id = campo;
        celda.innerHTML = campo;
        fila.appendChild(celda);



    });

    if(tipo == "td"){
        const eliminar = document.createElement("button");
        const editar = document.createElement("button");

        eliminar.innerHTML = "eliminar"
        editar.innerHTML = "editar"

        eliminar.classList.add("btn", "btn-danger", "btn-sm", "me-2");
        editar.classList.add("btn", "btn-primary", "btn-sm");

        editar.onclick = function(){
            window.location.href =`/libros/${libro.isbn}/edit`;
        }

        eliminar.onclick = function(){
            eliminarLibro(libro.isbn);
        }

        fila.appendChild(eliminar);
        fila.appendChild(editar)

    }

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

async function eliminarLibro(isbn) {
    try {
        const token = document.querySelector('meta[name="csrf-token"]').content;

        const response = await fetch(`/deleteLibro/${isbn}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-Type': 'application/json',
            },
        });

        const data = await response.json();

        if (data.success) {
            alert('Libro eliminado con éxito.');
            indexLibros();
        } else {
            alert('Se produjo un error, no se pudo eliminar el libro.');
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

async function crearLibro(){
    try {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const titulo = document.getElementById("titulo").value;
        const precio = document.getElementById("precio").value
        const stock = document.getElementById("stock").value;
        const sinopsis = document.getElementById("sinopsis").value
        const portada = document.getElementById("portada").value;
        const fecha_publicacion = document.getElementById("fecha_publicacion").value
        const id_tipo_libro = document.getElementById("id_tipo_libro").value;
        const id_edicion = document.getElementById("id_edicion").value




        const params = new URLSearchParams();
        params.append("titulo", titulo);
        params.append("precio", precio);
        params.append("stock", stock);
        params.append("sinopsis", sinopsis);
        params.append("portada", portada);
        params.append("fecha_publicacion", fecha_publicacion);
        params.append("id_tipo_libro", id_tipo_libro);
        params.append("id_edicion", id_edicion);




        const response = await fetch("/createlibro", {
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
                alert("libro añadido con éxito");
                window.location.href = "/";

            } else {
                alert("Se produjo un error, no se pudo añadir el");

            }
        } else {
            console.error("Error en la respuesta: ", response.status);
        }
    } catch (error) {
        console.error("Error en la petición:", error);
    }

    return false;
}

function editarLibro(isbn) {
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const titulo = document.getElementById("titulo").value;
    const precio = document.getElementById("precio").value;
    const stock = document.getElementById("stock").value;
    const sinopsis = document.getElementById("sinopsis").value;
    const portada = document.getElementById("portada").value;
    const fecha_publicacion = document.getElementById("fecha_publicacion").value;
    const id_tipo_libro = document.getElementById("id_tipo_libro").value;
    const id_edicion = document.getElementById("id_edicion").value;
    console.log(titulo)
    const params = new URLSearchParams();

     params.append("titulo", titulo);
     params.append("precio", precio);
    params.append("stock", stock);
     params.append("sinopsis", sinopsis);
     params.append("portada", portada);
     params.append("fecha_publicacion", fecha_publicacion);
     params.append("id_tipo_libro", id_tipo_libro);
     params.append("id_edicion", id_edicion);

    fetch('/libros/update/' + isbn, {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            "X-CSRF-TOKEN": token
        },
        body: params.toString()
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Error al actualizar el libro");
        }
        return response.json();
    })
    .then(data => {
        console.log(data.success)
        if (data.success) {

            alert("Libro editado con éxito");
            window.location.href = "/";
        } else {
            alert("Se produjo un error, no se pudo editar el libro");
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Error al procesar la solicitud");
    });
}



async function indexTipolibros() {
    fetch('/api/v1/tipolibros')
        .then(response =>{
            if(!response.ok){
                throw new Error("Error de servidor");
            }
            return response.json();
    })

    .then(tipos =>{

        if(tipos.data.length <= 0){
            const contenido = document.getElementById("contenido");
            contenido.innerHTML = "";

            const message = document.createElement("p");
            message.innerHTML = "No hay tipos";

            contenido.appendChild(message);
        }else{
             const contenido = document.getElementById("contenido");

             contenido.innerHTML = "";

             const tablalibros = crearTablaTipos(tipos.data);
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


function crearTablaTipos(tipos) {
    const tabla = document.createElement("table");
    tabla.setAttribute('class', 'table');
    const cabecera = crearFilaTipo(['ID', 'NOMBRE'], "th");
    cabecera.setAttribute('scope','col');
    tabla.appendChild(cabecera);


    tipos.forEach(tipo=> {
              const fila = crearFilaTipo([tipo['id'], tipo['nombre']], "td");
        tabla.appendChild(fila);




    });
    return tabla;
}


function crearFilaTipo(campos, tipo) {
    const fila = document.createElement("tr");


    campos.forEach(campo => {
        const celda = document.createElement(tipo);
        celda.id = campo;
        celda.innerHTML = campo;
        fila.appendChild(celda);



    });

    if(tipo == "td"){
        const eliminar = document.createElement("button");
        const editar = document.createElement("button");

        eliminar.innerHTML = "eliminar"
        editar.innerHTML = "editar"

        eliminar.classList.add("btn", "btn-danger", "btn-sm", "me-2");
        editar.classList.add("btn", "btn-primary", "btn-sm");


        fila.appendChild(eliminar);
        fila.appendChild(editar)

    }

    return fila;
}


async function indexUsuarios() {
    fetch('/api/v1/usuarios')
        .then(response =>{
            if(!response.ok){
                throw new Error("Error de servidor");
            }
            return response.json();
    })

    .then(usuarios =>{

        if(usuarios.data.length <= 0){
            const contenido = document.getElementById("contenido");
            contenido.innerHTML = "";

            const message = document.createElement("p");
            message.innerHTML = "No hay usuarios";

            contenido.appendChild(message);
        }else{
             const contenido = document.getElementById("contenido");

             contenido.innerHTML = "";

             const tablausuarios = crearTablausuarios(usuarios.data);
             contenido.appendChild(tablausuarios);

             const a = document.createElement("a")
             a.href = "#"
            a.innerHTML = "volver"

             a.onclick = function(){
                limpiarContenido();
             }

             contenido.appendChild(a);
        }
    }).catch(error =>{
        console.error("Error al cargar los usuarios:", error);
    })
}


function crearTablausuarios(usuarios) {
    const tabla = document.createElement("table");
    tabla.setAttribute('class', 'table');
    const cabecera = crearFilaTipo(['ID', 'EMAIL', 'FECHA DE REGISTRO'], "th");
    cabecera.setAttribute('scope','col');
    tabla.appendChild(cabecera);


    usuarios.forEach(usuario=> {
              const fila = crearFilaTipo([usuario['id'], usuario['email'], usuario['fecha de registro']], "td");
        tabla.appendChild(fila);




    });
    return tabla;
}
