<?php
session_start();
require_once "dades.php";

if (!isset($_SESSION['usuari']) || $_SESSION['usuari']['rol'] != 'admin') {
    header('Location: joc.php');
    exit;
}

if (isset($_GET['eliminar'])) {
    eliminarPregunta($_GET['eliminar']);
    header('Location: admin.php');
    exit;
}
?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Administració</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <?php include "header.php"; ?>

    <main class="contenidor">
      <section class="panell">
        <div class="navegacio">
          <div>
            <h1>Gestió de preguntes</h1>
            <p class="subtitol">Banc de preguntes del Trivial</p>
          </div>
          <a class="btn" href="pregunta_formulari.php">+ Nova pregunta</a>
        </div>

        <div class="taula-responsive">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Enunciat</th>
                <th>Accions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($_SESSION['preguntes'] as $p): ?>
                <tr>
                  <td><?= $p['id'] ?></td>
                  <td><?=$p['categoria'] ?></td>
                  <td><?= $p['pregunta']?></td>
                  <td>
                    <a class="btn btn-sec" href="pregunta_formulari.php?id=<?= $p['id'] ?>">Editar</a>
                    <a class="btn btn-perill" 
                       href="admin.php?eliminar=<?= $p['id'] ?>">Eliminar</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </section>
    </main>

    <?php include "footer.php"; ?>
  </body>
</html>
