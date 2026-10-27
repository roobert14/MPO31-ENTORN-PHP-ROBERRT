<?php
session_start();

if (!isset($_SESSION['completat']) || $_SESSION['completat'] !== true) {
    header('Location: index.php');
    exit;
}

$nom = $_SESSION['nom'];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Final del joc</title>
    <link rel="stylesheet" href="final.css">
</head>
<body>

    <div class="final-box">
        <h1>Enhorabona, <?php echo $nom; ?>!</h1>

        <h2>Has completat l'Escape Room!</h2>

        <p>Has superat tots els nivells: fàcil, mitjà i difícil.</p>

        <a href="index.php" class="btn-restart">Tornar a jugar</a>
    </div>

</body>
</html>