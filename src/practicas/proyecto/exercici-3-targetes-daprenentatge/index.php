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


<div class="top-bar">
    <div class="wrapper-top">
        <div class="social-icons">
            <span class="icon-fb">f</span>
            <span class="icon-x">𝕏</span>
            <span class="icon-ig">📷</span>
            <span class="icon-tk">♪</span>
        </div>
        <div class="lang-selector">
            <span class="es active">ES</span>
            <span class="ca">CA</span>
        </div>
    </div>
</div>


<header class="header-principal">
    <div class="wrapper-header">
        <div class="logo-container">
            <h1 class="logo">OCINE</h1>
            <span class="sub-logo">MÀGIC</span>
        </div>
        <nav class="nav-menu">
            <a href="#" class="active">CARTELLERA</a>
            <a href="#">BAR</a>
            <a href="#">EL CINEMA</a>
            <a href="#">SCREEN X</a>
            <a href="#">SALA KIDS</a>
            <a href="#">FIDELITY</a>
            <a href="#">ALTRES CINES</a>
        </nav>
    </div>
</header>


<div class="main-container">

   
    <div class="banner-promo">
        <img src="assets/martes.jpg" alt="Cinema en gran per a un públic sènior">
        <div class="banner-content">
            <h2>Cinema en gran per a un públic sènior.</h2>
        </div>
    </div>

   
    <div class="seccion-cartelera">
        <div class="cartelera-header">
            <h2>Cartellera</h2>
            <div class="vista-iconos">
                <span>⊞</span> <span>☰</span>
            </div>
        </div>

       
        <div class="filtros">
            <div class="botones-cat">
                <button class="filtro-btn activo">Cartellera</button>
                <button class="filtro-btn">Vose</button>
                <button class="filtro-btn">Screen X</button>
                <button class="filtro-btn">Sala Kids</button>
                <button class="filtro-btn">Esdeveniments</button>
                <button class="filtro-btn">Venda anticipada</button>
                <button class="filtro-btn">Properament</button>
            </div>
            <div class="genero-select">
                <label>Escull un gènere:</label>
                <select>
                    <option>Tots els gèneres</option>
                </select>
            </div>
        </div>

        
        <div class="cartelera">
            <?php foreach ($pelicules as $id => $pelicula) { ?>
            <div class="tarjeta">
                <img class="poster" src="<?php echo $pelicula["imatge"]; ?>" alt="<?php echo $pelicula["nom"]; ?>">
                
                <div class="info-hover">
                    <div class="informacion">
                        <h2><?php echo $pelicula["nom"]; ?></h2>
                        <p>avui, en cartellera</p>
                        
                        <?php foreach ($pelicula["horaris"] as $hora) { ?>
                            <span class="hora"><?php echo $hora; ?></span>
                        <?php } ?>

                        <a class="mes-info" href="detall.php?id=<?php echo $id; ?>">VEURE MÉS DIES</a>

                        <div class="enlaces">
                            <a href="trailer.php?id=<?php echo $id; ?>">▶ TRÀILER</a>
                            <a href="detall.php?id=<?php echo $id; ?>">▣ INFO</a>
                        </div>
                    </div>
                    <img class="poster-hover" src="<?php echo $pelicula["imatge"]; ?>" alt="<?php echo $pelicula["nom"]; ?>">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</div>

</body>
</html>