<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nom'] = $_POST['username'];
    $_SESSION['nivell'] = $_POST['dificultat'];
    $_SESSION['pregunta'] = 0;
    $_SESSION['missatge'] = '';

    header('Location: joc.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Inici</title>
</head>
<body>
    <h1>Benvingut!</h1>

    <form method="POST">
        <label>Nom:</label>
        <input type="text" name="username" required>

        <br><br>

        <label>Nivell:</label>
        <select name="dificultat" required>
            <option value="facil">Fàcil</option>
            <option value="mitja">Mitjà</option>
            <option value="dificil">Difícil</option>
        </select>

        <br><br>

        <button type="submit">Començar</button>
    </form>
</body>
</html>
