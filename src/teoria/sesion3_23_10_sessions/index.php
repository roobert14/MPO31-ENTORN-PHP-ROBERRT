<?php
session_start();

echo "hola session";

//session_destroy();

$_SESSION['edad'] = 19;

echo $_SESSION['edad'];

echo $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    
</body>
</html>