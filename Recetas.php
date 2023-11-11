<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
</head>
<body>

<h1>Lista de Recetas</h1>

<ul id="listaRecetas">
    <!-- Aquí se mostrarán los nombres de las recetas -->
</ul>

<div id="detallesReceta">
    <!-- Aquí se mostrarán los detalles de la receta seleccionada -->
</div>

<script>
    // Código JavaScript para manejar la interactividad
    document.addEventListener('DOMContentLoaded', function () {
        // Array de nombres de recetas (puedes obtener esto de tu base de datos)
        var nombresRecetas = ["Ensalada de Quinoa y Aguacate","Sopa de Tomate y Albahaca", "Pasta Alfredo con Champiñones", "Tacos de Lentejas", "Tarta de Manzana", "Ceviche de Mango y Aguacate", ];

        // Obtener la lista de recetas y el contenedor de detalles
        var listaRecetas = document.getElementById('listaRecetas');
        var detallesReceta = document.getElementById('detallesReceta');

        // Mostrar nombres de recetas
        nombresRecetas.forEach(function (nombreReceta) {
            var listItem = document.createElement('li');
            listItem.textContent = nombreReceta;
            listItem.addEventListener('click', function () {
                // Al hacer clic en un nombre de receta, muestra los detalles
                mostrarDetallesReceta(nombreReceta);
            });
            listaRecetas.appendChild(listItem);
        });

        // Función para mostrar detalles de la receta
        function mostrarDetallesReceta(nombreReceta) {
            // Aquí deberías obtener los detalles de la receta desde tu base de datos (puedes simular esto con datos de prueba)
            var detalles = obtenerDetallesRecetaDesdeBD(nombreReceta);

            // Mostrar los detalles en el contenedor correspondiente
            detallesReceta.innerHTML = `<h2>${nombreReceta}</h2>
                                           <p>Tipo: ${detalles.TipoPlatillo}</p>
                                           <p>Tiempo de preparación: ${detalles.TiempoPreparacion} minutos</p>
                                           <p>Instrucciones: ${detalles.Instrucciones}</p>
                                           <p>Promedio de Calificaciones: ${detalles.PromedioCalificaciones}</p>
                                           <p>Apto para Diabéticos: ${detalles.AptoDiabeticos ? 'Sí' : 'No'}</p>
                                           <p>Apto para Intolerantes a la Lactosa: ${detalles.AptoIntolerantesLactosa ? 'Sí' : 'No'}</p>
                                           <p>Contiene Gluten: ${detalles.ContieneGluten ? 'Sí' : 'No'}</p>
                                           <p>Apto para Veganos: ${detalles.AptoVeganos ? 'Sí' : 'No'}</p>`;
        }

        // Función simulada para obtener detalles de la receta desde la base de datos
        function obtenerDetallesRecetaDesdeBD(nombreReceta) {
            // Aquí deberías realizar una consulta a tu base de datos para obtener los detalles reales de la receta
            // Por ahora, simularemos algunos detalles de prueba
            return {
                TipoPlatillo: 'Plato de Fondo',
                TiempoPreparacion: 30,
                Instrucciones: 'Cocina la pasta. Saltea champiñones y ajo. Mezcla con salsa Alfredo. Sirve caliente.',
                PromedioCalificaciones: 4.7,
                AptoDiabeticos: false,
                AptoIntolerantesLactosa: true,
                ContieneGluten: true,
                AptoVeganos: false
            };
        }
    });
</script>

</body>
</html>

