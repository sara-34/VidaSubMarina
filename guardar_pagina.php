<?php
$conex = mysqli_connect("localhost:3308","root","","vidasubmarina");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener todo el contenido de la página
    $contenido = file_get_contents("index.php");

    // Guardar el contenido en un archivo
    $archivo = "contenido.txt";
    file_put_contents($archivo, $contenido);

    // Redirigir a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la información del formulario
    $info_card = $_POST["info_card"];

    // Guardar la información en un archivo de texto
    $archivo = "cards.txt";
    file_put_contents($archivo, $info_card . PHP_EOL, FILE_APPEND);

    // Redirigir a una página de confirmación
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Cards Aleatorias</h1>
    <?php
    $cards = [];
    // Leer todas las cards del archivo si existe
    $archivo = "cards.txt";
    if (file_exists($archivo)) {
        $cards = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }

    if (!empty($cards)) {
        // Obtener una card aleatoria si hay cards disponibles
        $card_aleatoria = $cards[array_rand($cards)];
        // Mostrar la card aleatoria
        echo "<div class='card'>" . $card_aleatoria . "</div>";
    } else {
        echo "<p>No hay cards disponibles.</p>";
    }
    ?>

    <hr>

    <!-- Formulario para agregar una nueva card -->
    <form action="guardar_pagina.php" method="post">
        <label for="info_card">Agregar Nueva Card:</label><br>
        <textarea id="info_card" name="info_card" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Agregar Card">
    </form>
</body>
</html>
