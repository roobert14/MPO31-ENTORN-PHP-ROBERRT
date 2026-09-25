<?php
        $titulo = "Módulo 7 - Práctica 1. Mi primera aplicación en PHP";
        $nombre = "Robert Ramirez";
        $edat = 19;
        $modulo = "MPO31";
        $imagen = "assets/logo-fpllefia.png";
        $persona = "assets/robert.png";
        $info = "Hola, em dic Robert Ramirez De Matos i aquest any he començat segon de DAW. Ara mateix estic a la segona setmana del curs i encara estic adaptant-me al nou ritme i a les assignatures. Vaig escollir DAW perquè sempre m’ha interessat el món de la informàtica i, sobretot, la programació i el desenvolupament de pàgines i aplicacions web.

Durant aquest curs espero aprendre coses noves i millorar els coneixements que ja tinc. També m’agradaria adquirir més experiència programant i poder fer projectes interessants al llarg de l’any. Fora dels estudis, m’agrada el futbol i passar temps amb els meus amics. Espero que aquest segon any de DAW sigui una bona experiència i poder acabar el curs havent après molt i preparat per al món laboral.";
        function miNombre(){
            return ("Robert Ramirez De Matos");
        }
        phpInfo();
?>

<html>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pp1. Primera aplicació en PHP</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="central">
            <div class="carta">
                <header>
                    <img src="<?php echo $imagen ?>" alt="">
                    <h1> <?= $titulo ?></h1>
                </header>
                <main>
                    <div class="contenido">
                        <div class="nombre">
                            <img src="<?php echo $persona ?>" alt="">
                            <p> <?php echo $nombre ?></p>
                        </div>
                        <div class="info">
                            <p> <?php echo $info ?></p>
                        </div>
                    </div>
                    
                </main>
                <footer>
                    <div class="nom_footer">
                        <p> <?php echo miNombre() ?></p>
                    </div>
                    <div class="fecha">
                        <span> La fecha de hoy es: <?= date("y/m/d")?></span>
                    </div>
                </footer>
             </div>   
        </div>
    </body>
    </html>
</html>






<html>
