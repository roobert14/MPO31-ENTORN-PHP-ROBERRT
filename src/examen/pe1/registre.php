<?php
session_start();
require_once 'dades.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuari = $_POST['usuari'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['password2'];

    if ($usuari == "" || $pass1 == "" || $pass2 == "") {
        $error = "Omple tots els camps";
    } 
    elseif ($pass1 != $pass2) {
        $error = "Les contrasenyes no coincideixen";
    } 
    else {
        foreach ($_SESSION['usuaris'] as $usu) {
            if ($usu['usuari'] == $usuari) {
                $error = "Aquest usuari ja existeix";
            }
        }

        if ($error == "") {
            $_SESSION['usuaris'][] = [
                "id" => count($_SESSION['usuaris']) + 1,
                "usuari" => $usuari,
                "password" => password_hash($pass1, PASSWORD_DEFAULT),
                "rol" => "jugador"
            ];
            header("Location: login.php");
            exit;
        }
    }
}
?>



<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registre</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
     <?php
          include "header.php";
      ?>
    <main class="contenidor">
      <section class="panell ample-mig">
        <h1>Registre de jugador</h1>
        <p class="subtitol">Crea un compte per poder jugar.</p>
        <form action="#" method="post">
          <label class="camp"
            >Nom d'usuari<input
              type="text"
              name="usuari"
              placeholder="Ex.: anna"
              required /></label
          ><label class="camp"
            >Contrassenya<input
              type="password"
              name="password"
              required /></label
          ><label class="camp"
            >Repeteix la contrassenya<input
              type="password"
              name="password2"
              required /></label
          ><button class="btn" type="submit">Registrar-me</button>
        </form>
        <p class="nota">
          Els nous comptes han de tenir sempre el rol de jugador.
        </p>
      </section>
    </main>
    <?php
        include "footer.php";
      ?>
  </body>
</html>