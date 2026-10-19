<style>
    table {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    .info-contacto {
        border: 1px solid #ccc;
        padding: 15px;
        margin-top: 20px;
        max-width: 300px;
    }

    .foto-perfil {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        display: block;
        margin-bottom: 10px;
    }

.info-contacto {
    max-width: 1200px;
    margin: 30px auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    color: #333;
    text-align: center;
}

.info-contacto h3 {
    text-align: center;
    color: #00a650;
    margin-bottom: 20px;
}

.info-contacto p {
    font-size: 16px;
    margin: 10px 0;
    text-align: center;
}

.info-contacto strong {
    color: #222;
}

.info-contacto img {
    display: block;
    width: 150px;
    height: 150px;
    object-fit: contain;
    object-position: center;
    border-radius: 10px;
    margin: 15px auto;
    border: 3px solid #00a650;
    background-color: white;
}

</style>

<?php
include "data/productos.php";

function generarTablaProductos($productos) {
    echo "<table>";

    echo "<tr>
            <th>Nombre del producto</th>
            <th>Precio</th>
            <th>Disponibilidad</th>
          </tr>";

    foreach ($productos as $producto) {
        echo "<tr>";
        echo "<td>" . $producto['nombre'] . "</td>";
        echo "<td>" . $producto['precio'] . " €</td>";
       echo "<td>" . ($producto['disponibilidad'] ? 'Sí' : 'No') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

function muestraInfoContacto($nombre, $tf, $imagen) {
   echo "<div class='info-contacto'>";
        echo "<h3>Información de contacto</h3>";
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Teléfono:</strong> " . $tf . "</p>";
        echo "<p><strong>Foto de perfil:</strong></p>";
        echo "<img src='" . $imagen . "' alt='Foto de perfil' width='150'>";
    echo "</div>";

}

generarTablaProductos($productosMercadona);
muestraInfoContacto($nombre, $tf, $imagen);
?>
