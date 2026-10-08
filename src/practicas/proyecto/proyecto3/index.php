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
        "tecno" => "PHP",
        "destacat" => true
    ],
    [
        "titol" => "If / else",
        "logo" => "assets/php.png",
        "img" => "assets/codi2.png",
        "descripcio" => "Permet executar un codi o un altre segons una condició.",
        "tecno" => "PHP",
        "destacat" => false
    ],
    [
        "titol" => "Manipular el DOM",
        "logo" => "assets/js.png",
        "img" => "assets/codi3.png",
        "descripcio" => "Permet modificar el contingut de la pàgina des de JavaScript.",
        "tecno" => "JavaScript",
        "destacat" => true
    ],
    [
        "titol" => "Array i forEach",
        "logo" => "assets/js.png",
        "img" => "assets/codi4.png",
        "descripcio" => "Permet recórrer tots els elements d'un array.",
        "tecno" => "JavaScript",
        "destacat" => false
    ],
    [
        "titol" => "Components",
        "logo" => "assets/react.png",
        "img" => "assets/codi5.png",
        "descripcio" => "Permeten dividir la interfície en peces reutilitzables.",
        "tecno" => "React",
        "destacat" => true
    ],
    [
        "titol" => "Props",
        "logo" => "assets/react.png",
        "img" => "assets/codi5.png",
        "descripcio" => "Serveixen per passar informació d'un component a un altre.",
        "tecno" => "React",
        "destacat" => false
    ],
    [
        "titol" => "Estructura HTML5",
        "logo" => "assets/HTML.png",
        "img" => "assets/codi6.png",
        "descripcio" => "Utilitzem etiquetes semàntiques per organitzar el contingut.",
        "tecno" => "HTML/CSS",
        "destacat" => false
    ],
    [
        "titol" => "Classes CSS",
        "logo" => "assets/HTML.png",
        "img" => "assets/codi6.png",
        "descripcio" => "Permeten aplicar estils als elements de la pàgina.",
        "tecno" => "HTML/CSS",
        "destacat" => true
    ],
    [
        "titol" => "Docker compose",
        "logo" => "assets/docker.png",
        "img" => "assets/codi7.png",
        "descripcio" => "Permet aixecar diversos serveis alhora.",
        "tecno" => "Docker",
        "destacat" => true
    ],
    [
        "titol" => "Contenidors",
        "logo" => "assets/docker.png",
        "img" => "assets/codi7.png",
        "descripcio" => "Permeten executar aplicacions de manera aïllada.",
        "tecno" => "Docker",
        "destacat" => false
    ],
    [
        "titol" => "Consultes SQL bàsiques",
        "logo" => "assets/BBDDD.png",
        "img" => "assets/codi8.png",
        "descripcio" => "Permeten obtenir informació de la base de dades.",
        "tecno" => "BBDD",
        "destacat" => true
    ],
    [
        "titol" => "SELECT i WHERE",
        "logo" => "assets/BBDDD.png",
        "img" => "assets/codi8.png",
        "descripcio" => "Serveixen per buscar dades concretes dins d'una taula.",
        "tecno" => "BBDD",
        "destacat" => false
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


    <!-- HEADER -->

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


    <!-- SUBHEADER -->

    <div class="subheader">

        <div class="partesub_izquierda">

            <h1>Chuleta digital DAW2</h1>

            <p>Els conceptes clau del curs, en un sol lloc</p>

        </div>

        <div class="partesub_derecha">

            <img src="assets/gorro.png" alt="">

            <p>
                Una pàgina per repassar de manera ràpida el que hem après a DAW2.
                Feta per estudiar, no per copiar
            </p>

        </div>

    </div>


    <!-- MAIN -->

    <div class="main">


        <!-- BOTONES DE TECNOLOGIAS -->

        <div class="lista_tecnologies">

            <?php for ($i = 0; $i < 8; $i++): ?>

                <?php

                if ($tecnologies[$i] == "PHP") {
                    $color = "azul";
                } elseif ($tecnologies[$i] == "JavaScript") {
                    $color = "amarillo";
                } elseif ($tecnologies[$i] == "React") {
                    $color = "turquesa";
                } elseif ($tecnologies[$i] == "HTML/CSS") {
                    $color = "verde";
                } elseif ($tecnologies[$i] == "Docker") {
                    $color = "morado";
                } elseif ($tecnologies[$i] == "BBDD") {
                    $color = "rojo";
                } else {
                    $color = "gris";
                }

                ?>

                <p class="lista2 <?= $color ?>">
                    <?= $tecnologies[$i] ?>
                </p>

            <?php endfor; ?>

        </div>


        <!-- TARJETAS -->

        <div class="projectes_actius">

            <?php for ($i = 0; $i < 12; $i++): ?>

                <?php

                if ($targetes[$i]["tecno"] == "PHP") {
                    $color = "azul";
                } elseif ($targetes[$i]["tecno"] == "JavaScript") {
                    $color = "amarillo";
                } elseif ($targetes[$i]["tecno"] == "React") {
                    $color = "turquesa";
                } elseif ($targetes[$i]["tecno"] == "HTML/CSS") {
                    $color = "verde";
                } elseif ($targetes[$i]["tecno"] == "Docker") {
                    $color = "morado";
                } else {
                    $color = "rojo";
                }

                ?>

                <div class="carta">

                    <div class="header_carta <?= $color ?>">

                        <div class="numero_nombre">

                            <img
                                class="logo"
                                src="<?= $targetes[$i]["logo"] ?>"
                                alt=""
                            >

                            <p class="nombre">
                                <?= $targetes[$i]["tecno"] ?>
                            </p>

                        </div>

                    </div>


                    <div class="informacion_carta">

                        <div class="texto_carta">

                            <p>
                                <?= $targetes[$i]["titol"] ?>
                            </p>

                            <span>
                                <?= $targetes[$i]["descripcio"] ?>
                            </span>

                            <img
                                class="imagen_codigo"
                                src="<?= $targetes[$i]["img"] ?>"
                                alt=""
                            >

                        </div>


                        <div class="footer_tarjeta">

                            <img
                                class="logo2"
                                src="<?= $targetes[$i]["logo"] ?>"
                                alt=""
                            >

                            <p class="nombre2">
                                <?= $targetes[$i]["tecno"] ?>
                            </p>

                            <?php if ($targetes[$i]["destacat"] == true): ?>

                                <span class="estrella">★</span>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php endfor; ?>

        </div>


        <!-- RESUMEN -->

        <div class="resumen">


            <!-- RESUMEN DE CONCEPTOS -->

            <div class="caja_resumen">

                <h2>📊 Resum de conceptes</h2>

                <div class="contenido_resumen">

                    <div class="lista_resumen">

                        <?php foreach ($tecnologies as $tecno): ?>

                            <?php if ($tecno != "Totes" && $tecno != "Projectes"): ?>

                                <?php

                                $cantidad = 0;

                                foreach ($targetes as $targeta) {

                                    if ($targeta["tecno"] == $tecno) {
                                        $cantidad++;
                                    }

                                }

                                if ($tecno == "PHP") {
                                    $color = "azul";
                                } elseif ($tecno == "JavaScript") {
                                    $color = "amarillo";
                                } elseif ($tecno == "React") {
                                    $color = "turquesa";
                                } elseif ($tecno == "HTML/CSS") {
                                    $color = "verde";
                                } elseif ($tecno == "Docker") {
                                    $color = "morado";
                                } else {
                                    $color = "rojo";
                                }

                                ?>

                                <div class="fila_resumen">

                                    <span class="punto <?= $color ?>"></span>

                                    <p><?= $tecno ?></p>

                                    <strong><?= $cantidad ?></strong>

                                </div>

                            <?php endif; ?>

                        <?php endforeach; ?>

                    </div>


                    <?php

                    $total = 0;

                    foreach ($targetes as $targeta) {
                        $total++;
                    }

                    ?>

                    <div class="total_resumen">

                        <p>Total de conceptes</p>

                        <strong><?= $total ?></strong>

                    </div>

                </div>

            </div>


            <!-- ASIGNATURAS -->

            <div class="caja_resumen">

                <h2>📖 Assignatures</h2>

                <div class="asignaturas_resumen">

                    <?php foreach ($tecnologies as $tecno): ?>

                        <?php if ($tecno != "Totes" && $tecno != "Projectes"): ?>

                            <?php

                            if ($tecno == "PHP") {
                                $color = "azul";
                            } elseif ($tecno == "JavaScript") {
                                $color = "amarillo";
                            } elseif ($tecno == "React") {
                                $color = "turquesa";
                            } elseif ($tecno == "HTML/CSS") {
                                $color = "verde";
                            } elseif ($tecno == "Docker") {
                                $color = "morado";
                            } else {
                                $color = "rojo";
                            }

                            ?>

                            <p class="<?= $color ?>">
                                <?= $tecno ?>
                            </p>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>

            </div>


            <!-- DESTACADOS -->

            <div class="caja_resumen">

                <h2>🎯 Conceptes destacats</h2>

                <div class="destacados">

                    <?php foreach ($targetes as $targeta): ?>

                        <?php if ($targeta["destacat"] == true): ?>

                            <p>
                                ⭐ <?= $targeta["titol"] ?>
                            </p>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>