<?php

$tecnologies = [
    "Totes",
    "PHP",
    "JavaScript",
    "React",
    "HTML/CSS",
    "Docker",
    "BBDD",
    "Projectes"
];

$targetes = [
    [
        "titol" => "Variables",
        "logo" => "assets/php.png",
        "img" => "assets/codi1.png",
        "descripcio" => "Serveixen per guardar informació que després podem utilitzar.",
        "tecno" => "PHP"
    ],
    [
        "titol" => "If / else",
        "logo" => "assets/php.png",
        "img" => "assets/codi2.png",
        "descripcio" => "Permet executar un codi o un altre segons una condició.",
        "tecno" => "PHP",
    ],
    [
        "titol" => "Manipular el DOM",
        "logo" => "assets/js.png",
        "img" => "assets/codi3.png",
        "descripcio" => "Permet modificar el contingut de la pàgina des de JavaScript.",
        "tecno" => "JavaScript",
    ],
    [
        "titol" => "Array i forEach",
        "logo" => "assets/js.png",
        "img" => "assets/codi4.png",
        "descripcio" => "Permet recórrer tots els elements d'un array.",
        "tecno" => "JavaScript",
    ],
    [
        "titol" => "Components",
        "logo" => "assets/react.png",
        "img" => "assets/codi5.png",
        "descripcio" => "Permeten dividir la interfície en peces reutilitzables.",
        "tecno" => "React",
    ],
    [
        "titol" => "Estructura HTML5",
        "logo" => "assets/HTML.png",
        "img" => "assets/codi6.png",
        "descripcio" => "Utilitzem etiquetes semàntiques per organitzar el contingut.",
        "tecno" => "HTML/CSS",
    ],
    [
        "titol" => "Docker compose",
        "img" => "assets/docker.png",
        "img" => "assets/codi7.png",
        "descripcio" => "Permet aixecar diversos serveis alhora (per exemple, una web i una base de dades).",
        "tecno" => "Docker",
    ],
    [
        "titol" => "Consultes SQL bàsiques",
        "img" => "assets/BBDDD",
        "img" => "assets/codi8.png",
        "descripcio" => "Permeten obtenir informació de la base de dades.",
        "tecno" => "BBDD",
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuleta digital DAW2</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="parte_izquierda">
                <img src="assets/logo.png" alt="">
                <h1>Chuleta DAW2</h1>
                <div class="parte_derecha">
                    <ul class="lista">
                        <li>Inici</li>
                        <li>Conceptes</li>
                        <li>Resum</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="subheader">
            <div class="partesub_izquierda">
                 <h1>Chuleta digital DAW2</h1>
                 <p>Els conceptes clau del curs, en un sol lloc</p>
            </div>
            <div class="partesub_derecha">
                <img src="assets/gorro.png" alt="">
                <p>Una pàgina per repassar de manera ràpida el que hem après a DAW2. Feta per estudiar, no per copiar</p>
            </div>
        </div>

        <div class="main">
            <div class="lista_tecnologies">
                <?php for ($i = 0; $i < 7; $i++): ?>
                    <p class="lista2"><?= $tecnologies[$i] ?></p>
                <?php endfor; ?>
            </div>
            <div class="projectes_actius">

            <?php
            for ($i = 0; $i < 8; $i++) {
            ?>

            <div class="carta">
                <div class="header_carta">
                    <div class="numero_nombre">
                        <img class="logo"src="<?= $targetes[$i]['logo'] ?>"alt="">
                         <p class="nombre"><?= $targetes[$i]['tecno'] ?></p>
                    </div>
                </div>

                <div class="informacion_carta">

                    <div class="texto_carta">
                        <p><?= $targetes[$i]['titol'] ?> </p>
                        <span><?= $targetes[$i]['descripcio'] ?></span>
                        <img class="logo"src="<?= $targetes[$i]['img'] ?>"alt="">
                    </div>
                    <div class="footer_tarjeta">
                        <img class="logo2"src="<?= $targetes[$i]['logo'] ?>"alt="">
                        <p class="nombre2"><?= $targetes[$i]['tecno'] ?></p>
                    </div>
                </div>

        <?php } ?>

    </div>
        </div>

    </div>
</body>
</html>