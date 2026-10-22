<?php
require_once __DIR__ . "/dades.php";

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id !== false && $id !== null && $id >= 0 && array_key_exists($id, $encarrecs)) {
    $encarrec = $encarrecs[$id];
} else {
    $encarrec = null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detall de l'encàrrec</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="detall-container">

    <a href="index.php" class="enllac-tornar">
        ← Tornar al gestor
    </a>

    <?php if ($encarrec != null) { ?>

        <div class="targeta-detall">

            <div class="detall-capcalera">

                <div class="detall-titols">

                    <span class="detall-subtitol">
                        DETALL DE L'ENCÀRREC #<?php echo $id; ?>
                    </span>

                    <h1 class="detall-titol-principal">
                        <?php echo $encarrec["titol"]; ?>
                    </h1>

                    <p class="detall-descripcio">
                        Projecte encarregat per
                        <strong><?php echo $encarrec["client"]; ?></strong>
                    </p>

                </div>

                <div>
                    <?php
                    if ($encarrec["estat"] == "Pendent") {
                        echo '<span class="etiqueta-estat pendent">Pendent</span>';
                    } elseif ($encarrec["estat"] == "En procés") {
                        echo '<span class="etiqueta-estat proces">En procés</span>';
                    } else {
                        echo '<span class="etiqueta-estat acabat">Acabat</span>';
                    }
                    ?>
                </div>

            </div>

            <div class="detall-cos">

                <div class="detall-camp">
                    <span class="camp-label">CLIENT</span>
                    <span class="camp-valor">
                        <?php echo $encarrec["client"]; ?>
                    </span>
                </div>

                <div class="detall-camp">
                    <span class="camp-label">HORES ESTIMADES</span>
                    <span class="camp-valor">
                        <?php echo $encarrec["hores"]; ?> hores
                    </span>
                </div>

                <div class="detall-camp">
                    <span class="camp-label">ESTAT</span>
                    <span class="camp-valor">
                        <?php echo $encarrec["estat"]; ?>
                    </span>
                </div>

                <div class="detall-camp">
                    <span class="camp-label">ETIQUETES</span>
                    <span class="camp-valor">
                        <?php echo implode(", ", $encarrec["etiquetes"]); ?>
                    </span>
                </div>

            </div>

        </div>

    <?php } else { ?>

        <p class="no-trobat">
            No s'ha trobat aquest encàrrec o l'ID no és vàlid.
        </p>

    <?php } ?>

</div>

</body>
</html>
```