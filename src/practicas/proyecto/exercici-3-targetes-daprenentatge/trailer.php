<?php
include "pelicules.php";

if (isset($_GET["id"]) && isset($pelicules[$_GET["id"]])) {
    $id = $_GET["id"];
    $pelicula = $pelicules[$id];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tráiler - <?php echo $pelicula["nom"]; ?></title>
    <link rel="stylesheet" href="trailer.css">
</head>
<body>

<div class="trailer-container">

    <header class="trailer-header">
        <h1><?php echo $pelicula["nom"]; ?></h1>
        <p>Tráiler de la película</p>
    </header>

    <div class="video-box">
        <iframe
            src="<?php echo $pelicula["trailer"]; ?>?autoplay=1&mute=1"
            title="Tráiler de la película"
            allow="autoplay; encrypted-media; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>

    <a class="volver" href="index.php">
        ← Volver a la cartelera
    </a>

</div>

</body>
</html>