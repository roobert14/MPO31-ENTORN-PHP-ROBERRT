<?php
$titulo = "Panell intern de projectes";
$logo = "assets/logo.png";
$subtitulo_header = "Agència digital · Gestió de projectes d'estudi";

$boton1 = "Inici";
$boton2 = "Projectes";
$boton3 = "Tenologies";
$boton4 = "Sobre";

$explorador = "assets/explorador.png";
$alerta = "assets/alerta.png";
$horess = "assets/hores.png";
$morado = "assets/morado.png";

$titulo_tarjeta1 = "Projectes";
$subtitulo_tarjeta1 = "Projectes registrats al panell";

$titulo_tarjeta2 = "Prioritat alta";
$subtitulo_tarjeta2 = "Projectes amb prioritat alta";

$titulo_tarjeta3 = "Hores estimades";
$subtitulo_tarjeta3 = "Suma total d'hores dels projectes";

$titulo_tarjeta4 = "Tecnologies";
$subtitulo_tarjeta4 = "Eines i tecnologies utilitzades";

$noms_projectes = [
    "Landing page moderna i responsive",
    "Catàleg de productes",
    "Blog corporatiu escola",
    "Auditoria responsive",
    "Fitxa de servei amb CTA",
    "Galeria de projectes",
    "Integració amb API",
    "Botiga en linia bàsica"
];

$tipus_projectes = [
    "Web",
    "Ecommerce",
    "CMS",
    "Qualitat",
    "Web",
    "CMS",
    "Web",
    "Ecommerce"
];

$hores_estimades = [6, 4, 3, 5, 2, 4, 8, 3];

$total = 0;

foreach ($hores_estimades as $hores) {
    $total += $hores;
}

$prioritats = [7, 5, 2, 8, 4, 3, 9, 6];

$prioritat_alta = 0;

foreach ($prioritats as $p) {
    if ($p >= 7) {
        $prioritat_alta++;
    }
}

$tecnologies = ["HTML", "CSS", "PHP", "Docker", "WordPress", "Shopify"];

$total2 = 0;

foreach ($tecnologies as $t) {
    $total2++;
}

foreach ($tecnologies as $tec) {
    $total2++;
}

$numero_tarjetas = ["1", "2", "3", "4", "5", "6", "7", "8"];

$iconos_projectes = [
    "assets/diente.png",
    "assets/carro.png",
    "assets/documento.png",
    "assets/libro.png",
    "assets/microfono.png",
    "assets/galeria.png",
    "assets/configuracion.png",
    "assets/bolso.png",
];

$descripciones = [
    "Landing page moderna i responsive.",
    "Catàleg de productes artesans.",
    "Blog amb notícies i articles.",
    "Revisió i millores de versió mòbil.",
    "Pàgina de servei amb formulari.",
    "Galeria filtrable de projectes.",
    "Connexió amb API externa.",
    "Botiga amb productes i pagament."
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panell intern de projectes d’una agencia digital</title>

    <link rel="stylesheet" href="./estilos.css?v=2">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">

        <div class="div-header">

            <div class="izquierda_header">

                <div>
                    <img class="logo" src="<?= $logo ?>" alt="">
                </div>

                <div class="titulo">
                    <h1><?= $titulo ?></h1>
                    <p><?= $subtitulo_header ?></p>
                </div>

            </div>

            <div class="derecha_header">
                <button><?= $boton1 ?></button>
                <button><?= $boton2 ?></button>
                <button><?= $boton3 ?></button>
                <button><?= $boton4 ?></button>
            </div>

        </div>


        <div class="tareas">

            <div class="tarjeta">

                <div>
                    <img class="logo2" src="<?= $explorador ?>" alt="">
                </div>

                <div class="texto_tarjeta">
                    <p class="projectess"><?= count($noms_projectes) ?></p>
                    <p class="titulo"><?= $titulo_tarjeta1 ?></p>
                    <p class="subtitulo"><?= $subtitulo_tarjeta1 ?></p>
                </div>

            </div>


            <div class="tarjeta2">

                <div>
                    <img class="logo2" src="<?= $alerta ?>" alt="">
                </div>

                <div class="texto_tarjeta">
                    <p class="projectess"><?= $prioritat_alta ?></p>
                    <p class="titulo"><?= $titulo_tarjeta2 ?></p>
                    <p class="subtitulo"><?= $subtitulo_tarjeta2 ?></p>
                </div>

            </div>


            <div class="tarjeta3">

                <div>
                    <img class="logo2" src="<?= $horess ?>" alt="">
                </div>

                <div class="texto_tarjeta">
                    <p class="projectess"><?= $total ?></p>
                    <p class="titulo"><?= $titulo_tarjeta3 ?></p>
                    <p class="subtitulo"><?= $subtitulo_tarjeta3 ?></p>
                </div>

            </div>


            <div class="tarjeta4">

                <div>
                    <img class="logo2" src="<?= $morado ?>" alt="">
                </div>

                <div class="texto_tarjeta">
                    <p class="projectess"><?= $total2 ?></p>
                    <p class="titulo"><?= $titulo_tarjeta4 ?></p>
                    <p class="subtitulo"><?= $subtitulo_tarjeta4 ?></p>
                </div>

            </div>

        </div>


        <div class="titulo_main">

            <div class="titulo">
                <h1>Projectes actius</h1>
                <p>Llista de projectes del curs. Cada targeta mostra la informació principal i la seva prioritat</p>
            </div>

            <div class="boton_main">
                <button>Ordenar per prioritat</button>
            </div>

        </div>


    <div class="projectes_actius">

        <?php
        for ($i = 0; $i < 8; $i++) {

            if ($prioritats[$i] >= 7) {
                $clasificacio = "Alta";
            } elseif ($prioritats[$i] >= 4) {
                $clasificacio = "Mitjana";
            } else {
                $clasificacio = "Baixa";
            }

            if ($numero_tarjetas[$i] % 2 == 0) {
                $parell_senar = "Parell";
            } else {
                $parell_senar = "Senar";
            }
        ?>

            <div class="carta">
                <div class="header_carta">

                    <div class="numero_nombre">
                        <span>#<?= $numero_tarjetas[$i] ?></span>
                        <p class="nombre"><?= $noms_projectes[$i] ?></p>
                    </div>

                    <?php if ($prioritats[$i] >= 7) { ?>
                        <span class="prioridad alta"> Alta</span>

                    <?php } elseif ($prioritats[$i] >= 4) { ?>
                        <span class="prioridad mitjana">Mitjana</span>

                    <?php } else { ?>
                        <span class="prioridad baixa">Baixa</span>
                    <?php } ?>
                </div>

                <div class="informacion_carta">

                    <div class="icono_carta">
                        <img class="logo"src="<?= $iconos_projectes[$i] ?>"alt="">
                    </div>

                    <div class="texto_carta">
                        <p><strong>Tipus:</strong><?= $tipus_projectes[$i] ?> </p>
                        <span><?= $descripciones[$i] ?></span>
                    </div>
                </div>
                <div class="pie_carta">
                    <span>🕐 <?= $hores_estimades[$i] ?> h</span>
                    <span class="prioritat_text">📊 Prioritat: <?= $prioritats[$i] ?>/10</span>
                    <span><?= $parell_senar ?></span>
                </div>

            </div>

        <?php } ?>

    </div>

    <div class="resumen">

    <div class="resumen_izquierda">

        <div class="titulo_resumen">

            <img src="<?= $explorador ?>" alt="">

            <div>
                <h2>Resum automàtic</h2>
                <p>Estadístiques generals dels projectes</p>
            </div>

        </div>


        <div class="datos_resumen">

            <div class="dato">

                <img src="<?= $explorador ?>" alt="">

                <div>
                    <strong><?= count($noms_projectes) ?></strong>
                    <p>Projectes totals</p>
                </div>

            </div>


            <div class="dato">

                <img src="<?= $alerta ?>" alt="">

                <div>
                    <strong><?= $prioritat_alta ?></strong>
                    <p>Prioritat alta</p>
                </div>

            </div>


            <div class="dato">

                <img src="<?= $horess ?>" alt="">

                <div>
                    <strong><?= $total ?> h</strong>
                    <p>Hores totals</p>
                </div>

            </div>


            <div class="dato">

                <img src="<?= $morado ?>" alt="">

                <div>
                    <strong>6</strong>
                    <p>Projectes web</p>
                </div>

            </div>

        </div>

    </div>


    <div class="tecnologias">

        <div class="titulo_tecnologias">

            <img src="<?= $morado ?>" alt="">

            <div>
                <h2>Tecnologies</h2>
                <p>Eines utilitzades en els projectes del curs</p>
            </div>

        </div>


        <div class="lista_tecnologias">
            <p><?= $tecnologies[0] ?></p>
            <p><?= $tecnologies[1] ?></p>
            <p><?= $tecnologies[2] ?></p>
            <p><?= $tecnologies[3] ?></p>
            <p><?= $tecnologies[4] ?></p>
            <p><?= $tecnologies[5] ?></p>
        </div>
    </div>

</div>


    </div>

</body>

</html>