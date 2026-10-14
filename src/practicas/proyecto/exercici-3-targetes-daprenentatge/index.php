<?php
include "pelicules.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cartellera Màgic Badalona</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <h1>Cartellera de cinema</h1>
    <p>OCINE Màgic Badalona</p>
</header>

<h2 class="titulo">Pel·lícules en cartellera</h2>

<div class="cartelera">

    <?php foreach ($pelicules as $id => $pelicula) { ?>

        <div class="tarjeta">

            <img src="<?php echo $pelicula["imatge"]; ?>"
                 alt="Imatge de la pel·lícula">

            <div class="contenido">

                <h2><?php echo $pelicula["nom"]; ?></h2>

                <p><strong>Horaris:</strong></p>

                <?php foreach ($pelicula["horaris"] as $hora) { ?>
                    <span class="hora">
                        <?php echo $hora; ?>
                    </span>
                <?php } ?>

                <div class="botones">

                    <a href="trailer.php?id=<?php echo $id; ?>">
                        Veure tràiler
                    </a>

                    <a href="detall.php?id=<?php echo $id; ?>">
                        Més informació
                    </a>

                </div>

            </div>

        </div>

    <?php } ?>

</div>

</body>
</html>