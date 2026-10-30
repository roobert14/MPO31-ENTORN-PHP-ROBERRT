<?php

include "functions.php";

$usuarios = [
    ["username" => "admin", "password" => password_hash("adminpass", PASSWORD_DEFAULT), "role" => "admin"],
    ["username" => "reader", "password" => password_hash("readerpass", PASSWORD_DEFAULT), "role" => "lector"]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuari = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";
    $photo = $_POST['photo'] ?? "";

    foreach ($usuarios as $usuario) {

        if ($usuari == $usuario['username'] && password_verify($password, $usuario['password'])) {

            $_SESSION['username'] = $usuari;
            $_SESSION['role'] = $usuario['role'];
            $_SESSION['photo'] = $photo;

            header('Location: home.php');
            exit;

        }

    }

    echo "<p class='error'>Usuario o contraseña equivocados</p>";

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="login">

        <h1>Iniciar sesión</h1>

        <form action="" method="POST">

            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username">

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">

            <label for="photo">Foto de perfil:</label>
            <input type="text" id="photo" name="photo">

            <input type="submit" value="Entrar">

        </form>

    </div>

</body>
</html>
