<?php
session_start();
require_once 'dades.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuari = $_POST['usuari'];
    $password = $_POST['password'];
    
    foreach ($_SESSION['usuaris'] as $usu) {
        if ($usu['usuari'] == $usuari) {
            if (password_verify($password, $usu['password'])) {
                $_SESSION['usuari'] = $usu;
                if ($usu['rol'] == 'admin') {
                    header("Location: admin.php");
                } else {
                    header("Location: joc.php");
                }
                exit;
            } else {
                $error = "Contrasenya incorrecta";
            }
        }
    }
    if ($error == "") {
        $error = "Usuari incorrecte";
    }
}
?>

<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>

     <?php
            include "header.php";
      ?>
    <main class="contenidor">
      <section class="panell ample-mig">
        <h1>Iniciar sessió</h1>
        <p class="subtitol">Accedeix com a jugador o administrador.</p>
        <?php
        echo($error)
        ?>
        <form action="#" method="post">
          <label class="camp"
            >Nom d'usuari<input name="usuari" type="text" required /></label
          ><label class="camp"
            >Contrasenya<input
              name="password"
              type="password"
              required /></label
          ><button class="btn" type="submit">Entrar</button>
        </form>
        <p class="nota">
          La versió PHP ha de verificar la contrasenya i redirigir segons el
          rol.
        </p>
      </section>
    </main>
    <?php
        include "footer.php";
      ?>
  </body>
</html>
