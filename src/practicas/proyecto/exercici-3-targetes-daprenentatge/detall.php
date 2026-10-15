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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pelicula["nom"]; ?></title>
    <link rel="stylesheet" href="detall.css">
</head>
<body>

<div class="detalle-header">
    <h1><?php echo $pelicula["nom"]; ?></h1>
</div>

<div class="detalle">

    
    <div class="detalle-col-left">
        <img class="poster" src="<?php echo $pelicula["imatge"]; ?>" alt="Imatge de la pel·lícula">
        <div class="botones">
            <a href="trailer.php?id=<?php echo $id; ?>">▶ VEURE TRÀILER</a>
        </div>
    </div>

    
    <div class="detalle-col-right">
        <p><?php echo $pelicula["sinopsi"]; ?></p>
        
        <p><strong>Durada:</strong> <?php echo $pelicula["durada"]; ?> minuts</p>
        <p><strong>Director:</strong> <?php echo $pelicula["director"]; ?></p>
        <p><strong>Repartiment:</strong></p>
        <ul>
            <?php foreach ($pelicula["repartiment"] as $actor) { ?>
                <li><?php echo $actor; ?></li>
            <?php } ?>
        </ul>
        <p><strong>Qualificació:</strong> <?php echo $pelicula["qualificacio"]; ?></p>
        <p><strong>Gènere:</strong> <?php echo $pelicula["genere"]; ?></p>


        
        <div class="bloque-horarios">
            <span class="etiqueta-atmos">ATMOS</span>
            <div class="lista-horas">
                <?php foreach ($pelicula["horaris"] as $hora) { ?>
                    <span class="hora"><?php echo $hora; ?></span>
                <?php } ?>
            </div>
        </div>

        <div style="margin-top: 15px;">
            <a href="index.php" style="color: #ed1c24; text-decoration: none; font-size: 13px; font-weight: bold;">← Tornar a la cartellera</a>
        </div>
    </div>

</div>

</body>
</html>