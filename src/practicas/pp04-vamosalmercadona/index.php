   <?php
    if (isset($_POST["name"])) {
        $nombre = ($_POST['name']);
    }
    if (isset($_POST["num"])) {
        $tf = ($_POST['num']);
    }
    if (isset($_POST["img"])) {
        $imagen = ($_POST['img']);
    } 
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
   <?php
    include "includes/header.php"
   ?>

</body>
</html>