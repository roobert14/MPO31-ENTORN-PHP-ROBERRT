<?php
include __DIR__ . "/dades.php";

if (isset($_POST["afegir"])) {

    $titol = $_POST["titol"];
    $client = $_POST["client"];
    $hores = $_POST["hores"];
    $estat = $_POST["estat"];
    $etiquetes = explode(",", $_POST["etiquetes"]);

    foreach ($etiquetes as $posicio => $etiqueta) {
        $etiquetes[$posicio] = trim($etiqueta);
    }

    $encarrecs[] = [
        "titol" => $titol,
        "client" => $client,
        "hores" => $hores,
        "estat" => $estat,
        "etiquetes" => $etiquetes
    ];

    $missatge = "L'encàrrec s'ha afegit correctament.";
}

if (isset($_POST["eliminar"])) {
    $id = $_POST["id"];
    unset($encarrecs[$id]);

    $missatge = "L'encàrrec s'ha eliminat correctament.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor d'encàrrecs</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php
    include __DIR__ . "/includes/header.php";
    ?>

    <div class="banner-encargos">
        <div class="contenido-banner">
            <div class="texto-banner">
                <span class="subtitulo-banner">AGÈNCIA WEB · TAULER DE PROJECTES</span>
                <h1 class="titulo-banner">Gestor d'encàrrecs</h1>
                <p class="descripcion-banner">Consulta la feina de l'equip, revisa les hores previstes i registra encàrrecs nous.</p>
            </div>
            <div class="boton-banner">
    <a href="#nou-encarrec" class="btn-nou">+ Nou encàrrec</a>
</div>
            <?php
                if (isset($missatge)) {
                echo "<p class='missatgeexit'>" . $missatge . "</p>";
            }
        ?>
        </div>
    </div>


<div class="contenedor-estadisticas">
    <div class="tarjeta-cifra">
        <span class="texto-etiqueta">Total d'encàrrecs</span>
        <span class="numero-destacado"><?php echo count($encarrecs); ?></span>
    </div>

    <?php
    $horesTotals = 0;
    foreach ($encarrecs as $encarrec) {
        $horesTotals = $horesTotals + $encarrec["hores"];
    }
    ?>
    <div class="tarjeta-cifra">
        <span class="texto-etiqueta">Hores estimades</span>
        <span class="numero-destacado"><?php echo $horesTotals; ?> h</span>
    </div>
</div>

    <div class="seccion-cabecera">
        <span class="subtitulo-seccion">PROJECTES ACTIUS</span>
        <h2 class="titulo-seccion">Llistat d'encàrrecs</h2>
    </div>

<div class="llista-encarrecs">
    <?php foreach ($encarrecs as $id => $encarrec) { ?>
        <div class="targeta-encarrec">
            
            <div class="targeta-capcalera">
                <?php
                if ($encarrec["estat"] == "Pendent") {
                    echo '<span class="etiqueta-estat pendent">Pendent</span>';
                } elseif ($encarrec["estat"] == "En procés") {
                    echo '<span class="etiqueta-estat proces">En procés</span>';
                } else {
                    echo '<span class="etiqueta-estat acabat">Acabat</span>';
                }
                ?>
                <span class="hores-encarrec"><?php echo $encarrec["hores"]; ?> h</span>
            </div>

            <h3 class="titol-encarrec"><?php echo $encarrec["titol"]; ?></h3>
            <p class="client-encarrec">Client: <strong><?php echo $encarrec["client"]; ?></strong></p>

            <p class="tecnologies-encarrec">
                <?php echo implode(" · ", $encarrec["etiquetes"]); ?>
            </p>

            <div class="accions-encarrec">
                <a href="detall.php?id=<?php echo $id; ?>" class="btn-detall">Veure detall</a>
                <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" name="eliminar" class="btn-eliminar">
                        Eliminar
                    </button>
                </form>
            </div>

</div>
    <?php } ?>
</div>


<section id="nou-encarrec" class="seccio-formulari">
    <div class="formulari-contenidor">
        
        <!-- Columna esquerra: Títols i avís -->
        <div class="formulari-info">
            <span class="detall-subtitol">ALTA DE PROJECTE</span>
            <h2>Afegir un encàrrec</h2>
            <p>Emplena totes les dades. Les etiquetes s'han d'escriure separades per comes.</p>
            
            <div class="alerta-repte">
                Les dades no es desen entre peticions, tal com demana el repte.
            </div>
        </div>

        <!-- Columna dreta: El formulari -->
        <form method="POST" class="el-formulari">

            <div class="camp-form">
                <label>Títol</label>
                <input type="text" name="titol" placeholder="Ex.: Redisseny d'una botiga" required>
            </div>

            <div class="camp-form">
                <label>Client</label>
                <input type="text" name="client" placeholder="Nom del client" required>
            </div>

            <div class="fila-doble">
                <div class="camp-form">
                    <label>Hores estimades</label>
                    <input type="number" name="hores" min="1" required>
                </div>
                <div class="camp-form">
                    <label>Estat</label>
                    <select name="estat">
                        <option value="Pendent">Pendent</option>
                        <option value="En procés">En procés</option>
                        <option value="Acabat">Acabat</option>
                    </select>
                </div>
            </div>

            <div class="camp-form">
                <label>Etiquetes</label>
                <input type="text" name="etiquetes" placeholder="PHP, Docker, Responsive" value="PHP, Docker, Responsive">
            </div>

            <button type="submit" name="afegir" class="boto-afegir">Afegir encàrrec</button>

        </form>

    </div>
</section>

     <?php
    include __DIR__ . "/includes/footer.php";
    ?>
</body>
</html>