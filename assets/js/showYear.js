// Función para obtener el año actual
function obtenerAnioActual() {
    const fecha = new Date();
    return fecha.getFullYear();
}

// Actualizar el año en el elemento con el ID "year"
function actualizarAnio() {
    const anioElemento = document.getElementById("year");
    const anio = obtenerAnioActual();
    anioElemento.textContent = anio;
}

// Actualizar el año una vez al cargar la página
actualizarAnio();

// Actualizar el año cada segundo (1000 milisegundos)
setInterval(actualizarAnio, 1000);