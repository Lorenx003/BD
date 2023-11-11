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
    document.addEventListener('DOMContentLoaded', function () {
        var listaRecetas = document.getElementById('listaRecetas');
        var detallesReceta = document.getElementById('detallesReceta');

        // Hacer una solicitud AJAX para obtener los nombres de las recetas desde el archivo PHP
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var nombresRecetas = JSON.parse(xhr.responseText);
                var nombress = nombresRecetas;

                // Mostrar nombres de recetas
                nombresRecetas.forEach(function (nombreReceta) {
                    var listItem = document.createElement('li');
                    listItem.textContent = nombreReceta;
                    listItem.addEventListener('click', function () {
                        mostrarDetallesReceta(nombreReceta);
                    });
                    listaRecetas.appendChild(listItem);
                });
            }
        };
        xhr.open('GET', 'obtener_nombres_recetas.php', true);
        xhr.send();



        function mostrarDetallesReceta(nombreReceta) {
            // Implementa la lógica para obtener los detalles de la receta usando AJAX
            // Puedes hacer otra solicitud AJAX al servidor para obtener detalles específicos según el nombre de la receta seleccionada
            // Luego, actualiza el contenido de detallesReceta con la información recibida
            // (Puedes seguir el mismo patrón que se usó para obtener nombres de recetas)
            // Ejemplo (simulado):



            detallesReceta.innerHTML = `<h2>${nombreReceta}</h2>
                                           <p>xd</p>`;
        }
    });
</script>

</body>
</html>
