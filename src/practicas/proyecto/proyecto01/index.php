<?php
        $titulo = "Valencia C.F. contra Barcelona";
        $equipo1p1 = "Valencia C.F.";
        $equipo2p1 = "Barcelona";
        $escudoEquipo1p1 = "assets/valenciaa.png";
        $escudoEquipo2p1 = "assets/barcelona.png";
        $videopartido1 = "assets/resultado1.jpg";
        $resultado1p1 = "0";
        $resultado2p1 = "5";
        $fechapartido1 = "6/9";

        $equipo1p2 = "Valencia C.F.";
        $equipo2p2 = "Barcelona";
        $escudoEquipo1p2 = "assets/valenciaa.png";
        $escudoEquipo2p2 = "assets/barcelona.png";
        $videopartido2 = "assets/resultado1.jpg";
        $resultado1p2 = "0";
        $resultado2p2 = "5";
        $fechapartido2 = "6/2/25";

        $equipo2p3 = "Valencia C.F.";
        $equipo1p3 = "Barcelona";
        $escudoEquipo2p3 = "assets/valenciaa.png";
        $escudoEquipo1p3 = "assets/barcelona.png";
        $videopartido3 = "assets/resultado1.jpg";
        $resultado1p3 = "0";
        $resultado2p3 = "5";
        $fechapartido3 = "31/1/27";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valencia C. F. contra Barcelona</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div class="tarjeta">
        <div class="cabecera">
            <h1> <?= $titulo ?></h1>
        </div>
        <div class="partidos">
            <!-- Partido 1 -->
            <div class="partido">
                <div class="contenido">
                    <div class="equipos">
                        <div class="equipo">
                            <img class="escudo" src=<?= $escudoEquipo1p1 ?> alt="">
                            <span class="nombre"><?= $equipo1p1 ?></span>
                            <span class="resultado"><?= $resultado1p1 ?></span>
                        </div>
                        <div class="equipo">
                            <img class="escudo" src=<?= $escudoEquipo2p1 ?> alt="">
                            <span class="nombre"><?= $equipo2p1 ?></span>
                            <span class="resultado"><?= $resultado2p1 ?></span>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="informacion">
                        <div class="estado">
                            <strong>Fin</strong><br>
                            <span><?= $fechapartido1 ?></span>
                        </div>
                        <div class="imagen">
                            <img src=<?= $videopartido1 ?> alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partido 2 -->
            <div class="partido">
                <div class="competicion">
                    Copa del Rey · Cuartos de final
                </div>
                <div class="contenido">
                    <div class="equipos">
                        <div class="equipo">
                            <img class="escudo" src=<?= $escudoEquipo1p2 ?> alt="">
                            <span class="nombre"><?= $equipo1p2?></span>
                            <span class="resultado"><?= $resultado1p2 ?></span>
                        </div>
                        <div class="equipo">
                            <img class="escudo" src=<?= $escudoEquipo2p2 ?> alt="">
                            <span class="nombre"><?= $equipo2p2 ?></span>
                            <span class="resultado"><?= $resultado2p2 ?></span>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="informacion">
                        <div class="estado">
                            <strong>Fin</strong><br>
                            <span><?= $fechapartido2 ?></span>
                        </div>
                         <div class="imagen">
                            <img src=<?= $videopartido2 ?> alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partido próximo -->
            <div class="partido">
                <div class="contenido">
                    <div class="equipos">
                        <div class="equipo">
                            <img class="escudo" src=<?= $escudoEquipo1p3 ?> alt="">
                            <span class="nombre"><?= $equipo1p3 ?></span>
                        </div>
                        <div class="equipo">
                            <img class="escudo" src=<?= $escudoEquipo2p3 ?> alt="">
                            <span class="nombre"><?= $equipo2p3 ?></span>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="informacion">
                        <div class="estado">
                            <span><?= $fechapartido3 ?></span><br>
                            <span>Por definir</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Espacio vacío -->
            <div class="partido vacio"></div>
        </div>
        <div class="pie">
            <span class="texto">
                Horarios en Hora de Verano de Europa Central</span>
            <span>Sugerencias</span>
        </div>

    </div>

</body>

</html>