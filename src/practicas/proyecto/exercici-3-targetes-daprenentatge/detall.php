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
    <title><?php echo $pelicula["nom"]; ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <h1><?php echo $pelicula["nom"]; ?></h1>
    <p>OCINE Màgic Badalona</p>
</header>

<div class="detalle">

    <img class="poster"
         src="<?php echo $pelicula["imatge"]; ?>"
         alt="Imatge de la pel·lícula">

    <h2>Informació de la pel·lícula</h2>

    <p>
        <strong>Sinopsi:</strong>
        <?php echo $pelicula["sinopsi"]; ?>
    </p>

    <p>
        <strong>Durada:</strong>
        <?php echo $pelicula["durada"]; ?> minuts
    </p>

    <p>
        <strong>Director:</strong>
        <?php echo $pelicula["director"]; ?>
    </p>

    <p>
        <strong>Qualificació:</strong>
        <?php echo $pelicula["qualificacio"]; ?>
    </p>

    <p>
        <strong>Gènere:</strong>
        <?php echo $pelicula["genere"]; ?>
    </p>

    <h3>Horaris</h3>

    <?php foreach ($pelicula["horaris"] as $hora) { ?>
        <span class="hora">
            <?php echo $hora; ?>
        </span>
    <?php } ?>

    <h3>Repartiment</h3>

    <ul>
        <?php foreach ($pelicula["repartiment"] as $actor) { ?>
            <li><?php echo $actor; ?></li>
        <?php } ?>
    </ul>

    <?php if ($id == 10) { ?>

        <h3>Valoració de la pel·lícula</h3>

        <p class="estrellas">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $pelicula["estrelles"]) {
                    echo "★";
                } else {
                    echo "☆";
                }
            }
            ?>
        </p>

        <h3>Imatges de la pel·lícula</h3>

        <div class="carrusel">

            <?php foreach ($pelicula["imatges_extres"] as $imatge) { ?>

                <img src="<?php echo $imatge; ?>"
                     alt="Imatge extra de la pel·lícula">

            <?php } ?>

        </div>

    <?php } ?>

    <div class="botones">

        <a href="trailer.php?id=<?php echo $id; ?>">
            Veure tràiler
        </a>

        <a href="index.php">
            Tornar a la cartellera
        </a>

    </div>

</div>

</body>
</html>