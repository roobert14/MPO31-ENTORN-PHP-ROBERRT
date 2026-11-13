<?php
session_start();
require_once 'dades.php';

if (!isset($_SESSION['usuari'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['reiniciar'])) {
    $_SESSION['index_pregunta'] = 0;
    $_SESSION['punts'] = 0;
    unset($_SESSION['missatge_joc']);
    header("Location: joc.php");
    exit;
}

if (!isset($_SESSION['index_pregunta'])) $_SESSION['index_pregunta'] = 0;
if (!isset($_SESSION['punts'])) $_SESSION['punts'] = 0;

$totalPreguntes = count($_SESSION['preguntes']);
$index = $_SESSION['index_pregunta'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['resposta'])) {
    $preguntaActual = $_SESSION['preguntes'][$index];
    $respostaUsuari = $_POST['resposta'];

    if ($respostaUsuari == $preguntaActual['correcta']) {
        $_SESSION['punts']++;
        $_SESSION['missatge_joc'] = "Correcte! Has sumat 1 punt.";
    } else {
        $textCorrecta = $preguntaActual['opcions'][$preguntaActual['correcta']];
        $_SESSION['missatge_joc'] = "Incorrecte! La resposta correcta era: " . $textCorrecta;
    }

    $_SESSION['index_pregunta']++;
    header("Location: joc.php");
    exit;
}

$missatge = $_SESSION['missatge_joc'] ?? "";
unset($_SESSION['missatge_joc']);

$jocAcabat = ($index >= $totalPreguntes);
if (!$jocAcabat) {
    $preguntaActual = $_SESSION['preguntes'][$index];
    $pendents = $totalPreguntes - $index;
}
?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <title>Trivial</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <?php include "header.php"; ?>
    <main class="contenidor">
      <section class="panell">
        <h1>Hola, <?= $_SESSION['usuari']['usuari'] ?>!</h1>

        <?php if ($missatge != ""): ?>
          <div class="alerta" style="margin-bottom: 15px;"><?= $missatge ?></div>
        <?php endif; ?>

        <?php if ($jocAcabat): ?>
          <h2>Partida acabada!</h2>
          <p class="subtitol">Has aconseguit <strong><?= $_SESSION['punts'] ?></strong> punts de <strong><?= $totalPreguntes ?></strong> preguntes.</p>
          <a class="btn" href="joc.php?reiniciar=1">Tornar a jugar</a>
        <?php else: ?>
          <p class="subtitol">Respon la pregunta i continua avançant.</p>
          <div class="estadistiques">
            <span><strong>Puntuació:</strong> <?= $_SESSION['punts'] ?> punts</span>
            <span><strong>Progrés:</strong> <?= $index + 1 ?> de <?= $totalPreguntes ?></span>
            <span><strong>Pendents:</strong> <?= $pendents ?></span>
          </div>

          <span class="etiqueta"><?= $preguntaActual['categoria'] ?></span>
          <h2 style="margin-top: 15px"><?= $preguntaActual['pregunta'] ?></h2>

          <form method="post" action="">
            <?php foreach ($preguntaActual['opcions'] as $num => $textOpcio): ?>
              <label class="resposta">
                <input type="radio" name="resposta" value="<?= $num ?>" required />
                <?= $textOpcio ?>
              </label>
            <?php endforeach; ?>
            <button class="btn" type="submit">Comprovar resposta</button>
          </form>
        <?php endif; ?>
      </section>
    </main>
    <?php include "footer.php"; ?>
  </body>
</html>
