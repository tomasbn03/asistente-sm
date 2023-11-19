import { tarjetas } from './Tarjetas.js' // Se importa la constante tarjetas del archivo Tarjetas.js

// Función para filtrar las tarjetas
const filtrarTarjetas = busqueda => {
    if (busqueda === '') return tarjetas // Si no hay nada en la barra de búsqueda, se muestran todas las tarjetas
    return tarjetas.filter(tarjeta => tarjeta.titulo.toLowerCase().includes(busqueda.toLowerCase()))
}

// Función para renderizar las tarjetas
const renderTarjetas = tarjetasParaRenderizar => {
    const contenedorTarjetas = document.querySelector('.cont-recurs')
    contenedorTarjetas.innerHTML = '' // Se limpia el contenedor de tarjetas

    tarjetasParaRenderizar.forEach(tarjeta => {
        const tarjetaHtml = `
            <div class="fondo">
                <div class="cont">
                    <h3>${tarjeta.titulo}</h3><br>
                    <span>${tarjeta.texto}</span><br>
                    <a href="${tarjeta.enlace}" class="boton-animado">Acceder</a>
                </div>
            </div><br>
        `

        contenedorTarjetas.innerHTML += tarjetaHtml
    })

    // Si no hay tarjetas para renderizar, se muestra un mensaje
    if (tarjetasParaRenderizar.length === 0) {
        contenedorTarjetas.innerHTML = '<h3>No se encontraron resultados</h3>'
    }
}

// Evento para filtrar las tarjetas
document.getElementById('search').addEventListener('input', (e) => {
    const busqueda = e.target.value
    const resultados = filtrarTarjetas(busqueda)
    renderTarjetas(resultados)
})

// Renderizar todas las tarjetas al cargar la página
renderTarjetas(tarjetas)
