<?php
// Establecer la conexión con la base de datos
$conex = mysqli_connect("localhost:3308", "root", "", "vidasubmarina");

if (!$conex) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Consulta SQL para obtener todos los comentarios de la tabla
$consulta = "SELECT * FROM comentario";
$result = mysqli_query($conex, $consulta);

if (mysqli_num_rows($result) > 0) {
    // Mostrar todos los comentarios
    echo '<div class="comentarios-container">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="comentario">';
        echo '<p>' . $row['texto'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No hay comentarios aún.</p>';
}

// Cerrar la conexión con la base de datos
mysqli_close($conex);
?>
