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
$diente = "assets/diente.png";
$documento = "assets/documento.png";
$libro = "assets/libro.png";
$microfono = "assets/microfono.png";
$galeria = "assets/galeria.png";
$configuracion = "assets/configuracion.png";
$bolso = "assets/bolso.png";


$titulo_tarjeta1 = "Projectes";
$subtitulo_tarjeta1 = "Projectes registrats al panell";

$titulo_tarjeta2 = "Prioritat alta";
$subtitulo_tarjeta2 = "Projectes amb prioritat alta";

$titulo_tarjeta3 = "Hores estimades";
$subtitulo_tarjeta3 = "Suma total d'hores dels projectes";

$titulo_tarjeta4 = "Tecnologies";
$subtitulo_tarjeta4 = "Eines i tecnologies utilitzades";

$noms_projectes = [
    "Landing per a clínica dental",
    "Catàleg de productes artesans",
    "Blog corporatiu escola",
    "Auditoria responsive",
    "Fitxa de servei amb CTA",
    "Galeria de projectes",
    "Botiga online bàsica",
    "Optimització d'imatges"
];

$tipus_projectes = [
    "Web",
    "Ecommerce",
    "CMS",
    "Qualitat",
    "Web",
    "CMS",
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
    $total2 ++;
}

$numero_tarjetas = ["1", "2", "3", "4", "5", "6", "7", "8"];
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
                    <img class="logo" src=<?= $logo ?> alt="">
                </div>
                <div class="titulo">
                    <h1> <?= $titulo ?></h1>
                    <p> <?= $subtitulo_header ?></p>
                </div>
            </div>

            <div class="derecha_header">
                <button> <?= $boton1 ?></button>
                <button> <?= $boton2 ?></button>
                <button> <?= $boton3 ?></button>
                <button> <?= $boton4 ?></button>
            </div>
        </div>
            <div class="tareas">
                <div class="tarjeta">
                    <div>
                        <img class="logo2" src=<?= $explorador ?> alt="">
                    </div>
                    <div class="texto_tarjeta">
                        <p class="projectess"><?= count($noms_projectes) ?></p>
                        <p class="titulo"> <?= $titulo_tarjeta1 ?></p>
                        <p class="subtitulo"> <?= $subtitulo_tarjeta1 ?></p>
                    </div>
                </div>
                <div class="tarjeta2">
                    <div>
                        <img class="logo2" src=<?= $alerta ?> alt="">
                    </div>
                    <div class="texto_tarjeta">
                        <p class="projectess"><?= $prioritat_alta ?></p>
                        <p class="titulo"> <?= $titulo_tarjeta2 ?></p>
                        <p class="subtitulo"> <?= $subtitulo_tarjeta2 ?></p>
                    </div>
                </div>
                <div class="tarjeta3">
                    <div>
                        <img class="logo2" src=<?= $horess ?> alt="">
                    </div>
                    <div class="texto_tarjeta">
                        <p class="projectess"><?= $total?></p>
                        <p class="titulo"> <?= $titulo_tarjeta3 ?></p>
                        <p class="subtitulo"> <?= $subtitulo_tarjeta3 ?></p>
                    </div>
                </div>
                <div class="tarjeta4">
                    <div>
                        <img class="logo2" src=<?= $morado ?> alt="">
                    </div>
                    <div class="texto_tarjeta">
                        <p class="projectess"><?= $total2?></p>
                        <p class="titulo"> <?= $titulo_tarjeta3 ?></p>
                        <p class="subtitulo"> <?= $subtitulo_tarjeta3 ?></p>
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
                <div class="carta">
                    <div class="header_carta">
                        <span><?= $numero_tarjetas[0]?></span>
                        <p class="nombre"><?= $noms_projectes[0]?></p>
                        <p></p>
                    </div>
                    <div class="logo_carta">
                        <img class="logo" src=<?= $diente ?> alt="">
                        <p class="nombre">Tipus: <?= $tipus_projectes[0]?></p>
                            <span>Landing page moderna i responsive</span>
                    </div>
                    <div>
                        
                    </div>
                </div>
            </div>
    </div>
    
    
</body>
</html>