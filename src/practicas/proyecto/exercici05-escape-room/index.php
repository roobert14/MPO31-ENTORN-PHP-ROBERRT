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
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="login-box">
        <h1>Benvingut!</h1>

        <form method="POST">
            <label for="username">Nom:</label>
            <input type="text" id="username" name="username" required>

            <label for="dificultat">Nivell:</label>
            <select id="dificultat" name="dificultat" required>
                <option value="facil">Fàcil</option>
                <option value="mitja">Mitjà</option>
                <option value="dificil">Difícil</option>
            </select>

            <button type="submit">Començar</button>
        </form>
    </div>

</body>
</html>
