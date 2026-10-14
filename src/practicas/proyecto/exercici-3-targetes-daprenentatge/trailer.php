<?php
include "pelicules.php";

if (isset($_GET["id"]) && isset($pelicules[$_GET["id"]])) {
    $id = $_GET["id"];
    $pelicula = $pelicules[$id];
} else {
    echo "Pel·lícula no trobada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tràiler - <?php echo $pelicula["nom"]; ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <h1><?php echo $pelicula["nom"]; ?></h1>
    <p>Tràiler de la pel·lícula</p>
</header>

<div class="trailer">

    <iframe
        src="<?php echo $pelicula["trailer"]; ?>?autoplay=1&mute=1"
        title="Tràiler de la pel·lícula"
        allow="autoplay; encrypted-media; picture-in-picture"
        allowfullscreen>
    </iframe>

    <a class="volver" href="index.php">
        Tornar a la cartellera
    </a>

</div>

</body>
</html>