<?php
session_start();
$userCorrecte = 'pepe';
$passwordCorrecte = password_hash("12345", PASSWORD_DEFAULT);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuari = $_POST['name'] ?? "";
    $password = $_POST['password'] ?? "";
    if($usuari == $userCorrecte && password_verify($password, $passwordCorrecte)){
        $_SESSION['username'] = $usuari;
        header('Location: inici.php');
        exit;
    }else{
        echo "user o password equivocados";
}
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Sesión</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Dime tu nombre: </label>
        <input type="text" id="name" name="name">
        <label for="name">Dime tu contraseña: </label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>