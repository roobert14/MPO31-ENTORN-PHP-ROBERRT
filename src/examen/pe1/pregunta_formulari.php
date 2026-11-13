<?php
session_start();
require_once 'dades.php';

if (!isset($_SESSION['usuari']) || $_SESSION['usuari']['rol'] != 'admin') {
    header('Location: joc.php');
    exit;
}

$preguntaActual = null;
if (isset($_GET['id'])) {
    foreach ($_SESSION['preguntes'] as $p) {
        if ($p['id'] == $_GET['id']) {
            $preguntaActual = $p;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $categoria = $_POST['categoria'];
    $pregunta = $_POST['pregunta'];
    $opcions = [
        $_POST['opcio_0'],
        $_POST['opcio_1'],
        $_POST['opcio_2'],
        $_POST['opcio_3']
    ];
    $correcta = $_POST['correcta'];

    if ($id != "") {
        editarPregunta($id, $categoria, $pregunta, $opcions, $correcta);
    } else {
        crearPregunta($categoria, $pregunta, $opcions, $correcta);
    }

    header("Location: admin.php");
    exit;
}
?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pregunta</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <?php include "header.php"; ?>

    <main class="contenidor">
      <section class="panell ample-mig">
        <h1><?= $preguntaActual ? "Editar pregunta" : "Crear pregunta" ?></h1>
        <p class="subtitol">
          El mateix formulari pot servir per a les dues operacions.
        </p>

        <form action="" method="post">
          <!-- Camp ocult per saber si estem editant (tindrà número) o creant (estarà buit) -->
          <input type="hidden" name="id" value="<?= $preguntaActual ? $preguntaActual['id'] : '' ?>" />

          <label class="camp">
            Categoria
            <select name="categoria" required>
              <option value="">Selecciona una categoria</option>
              <?php foreach ($categories as $cat): ?>
                <option value="<?= $cat ?>" <?= ($preguntaActual && $preguntaActual['categoria'] == $cat) ? 'selected' : '' ?>>
                  <?= $cat ?>
                </option>
              <?php endforeach; ?>
            </select>
          </label>

          <label class="camp">
            Enunciat
            <textarea name="pregunta" required placeholder="Escriu l'enunciat..."><?= $preguntaActual ? $preguntaActual['pregunta'] : '' ?></textarea>
          </label>

          <label class="camp">
            Opció A
            <input type="text" name="opcio_0" value="<?= $preguntaActual ? $preguntaActual['opcions'][0] : '' ?>" required />
          </label>

          <label class="camp">
            Opció B
            <input type="text" name="opcio_1" value="<?= $preguntaActual ? $preguntaActual['opcions'][1] : '' ?>" required />
          </label>

          <label class="camp">
            Opció C
            <input type="text" name="opcio_2" value="<?= $preguntaActual ? $preguntaActual['opcions'][2] : '' ?>" required />
          </label>

          <label class="camp">
            Opció D
            <input type="text" name="opcio_3" value="<?= $preguntaActual ? $preguntaActual['opcions'][3]: '' ?>" required />
          </label>

          <label class="camp">
            Resposta correcta
            <select name="correcta" required>
              <option value="0" <?= ($preguntaActual && $preguntaActual['correcta'] == 0) ? 'selected' : '' ?>>A</option>
              <option value="1" <?= ($preguntaActual && $preguntaActual['correcta'] == 1) ? 'selected' : '' ?>>B</option>
              <option value="2" <?= ($preguntaActual && $preguntaActual['correcta'] == 2) ? 'selected' : '' ?>>C</option>
              <option value="3" <?= ($preguntaActual && $preguntaActual['correcta'] == 3) ? 'selected' : '' ?>>D</option>
            </select>
          </label>

          <div class="accions">
            <button class="btn" type="submit">Guardar pregunta</button>
            <a class="btn btn-sec" href="admin.php">Cancel·lar</a>
          </div>
        </form>
      </section>
    </main>

    <?php include "footer.php"; ?>
  </body>
</html>
