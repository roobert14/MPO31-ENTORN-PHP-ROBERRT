<?php
session_start();
require_once 'preguntas.php';

if (!isset($_SESSION['nivell'])) {
    header('Location: index.php');
    exit;
}

$nivell = $_SESSION['nivell'];
$preguntaIdx = $_SESSION['pregunta'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['continuar'])) {
        unset($_SESSION['canvi_nivell']);
        $_SESSION['missatge'] = '';

        header('Location: joc.php');
        exit;
    }

    if (isset($_POST['resposta'])) {

        $resposta = trim($_POST['resposta']);
        $correcta = $nivells[$nivell][$preguntaIdx]['resposta'];

        if ($resposta == '') {
            $_SESSION['missatge'] = 'Escriu una resposta.';

        } elseif ($resposta == $correcta) {

            $_SESSION['pregunta']++;

            if ($_SESSION['pregunta'] >= count($nivells[$nivell])) {

                $_SESSION['pregunta'] = 0;

                if ($nivell == 'facil') {
                    $_SESSION['nivell'] = 'mitja';
                    $_SESSION['missatge'] = 'Has superat el nivell fàcil!';
                    $_SESSION['canvi_nivell'] = true;

                } elseif ($nivell == 'mitja') {
                    $_SESSION['nivell'] = 'dificil';
                    $_SESSION['missatge'] = 'Has superat el nivell mitjà!';
                    $_SESSION['canvi_nivell'] = true;

                } else {
                    $_SESSION['completat'] = true;
                    header('Location: final.php');
                    exit;
                }

            } else {
                $_SESSION['missatge'] = 'Resposta correcta!';
            }

        } else {
            $_SESSION['missatge'] = 'Resposta incorrecta! Torna-ho a provar.';
        }
    }

    header('Location: joc.php');
    exit;
}

$nivell = $_SESSION['nivell'];
$preguntaIdx = $_SESSION['pregunta'];

$preguntaActual = $nivells[$nivell][$preguntaIdx]['pregunta'];

$noms = [
    'facil' => 'Fàcil',
    'mitja' => 'Mitjà',
    'dificil' => 'Difícil'
];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Escape Room</title>
</head>
<body>

<?php if (isset($_SESSION['canvi_nivell'])): ?>

    <h1>Enhorabona!</h1>

    <p><?php echo $_SESSION['missatge']; ?></p>

    <p>Has passat al nivell <?php echo $noms[$nivell]; ?>.</p>

    <form method="POST">
        <button type="submit" name="continuar">Continuar</button>
    </form>

<?php else: ?>

    <h1>Escape Room</h1>

    <p>Jugador: <?php echo $_SESSION['nom']; ?></p>

    <h2>Nivell: <?php echo $noms[$nivell]; ?></h2>

    <h3>Pregunta <?php echo $preguntaIdx + 1; ?> de 3</h3>

    <p><?php echo $preguntaActual; ?></p>

    <p><?php echo $_SESSION['missatge']; ?></p>

    <form method="POST">
        <input type="text" name="resposta" placeholder="Escriu la resposta" required>
        <button type="submit">Enviar resposta</button>
    </form>

<?php endif; ?>

</body>
</html>
