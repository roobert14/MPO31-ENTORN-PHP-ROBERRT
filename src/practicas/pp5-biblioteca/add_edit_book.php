<?php

include "functions.php";

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if ($_SESSION['role'] != 'admin') {
    header('Location: home.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $libro = $_SESSION['libros'][$id];
} else {

    $id = "";
    $libro = [
        "titulo" => "",
        "autor" => "",
        "imagen" => "",
        "descripcion" => ""
    ];

}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];

    if ($titulo != "" && $autor != "") {

        if ($id == "") {
            agregarLibro($titulo, $autor, $imagen, $descripcion);
        } else {
            editarLibro($id, $titulo, $autor, $imagen, $descripcion);
        }

        header('Location: home.php');
        exit;

    } else {
        echo "El título y el autor son obligatorios";
    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar o editar libro</title>
    <link rel="stylesheet" href="css/editar.css">
</head>
<body>

    <div class="formulario">

        <h1><?php echo $id == "" ? "Agregar libro" : "Editar libro"; ?></h1>

        <form action="" method="POST">

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo"
                   value="<?php echo $libro['titulo']; ?>">

            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor"
                   value="<?php echo $libro['autor']; ?>">

            <label for="imagen">Imagen (URL):</label>
            <input type="text" id="imagen" name="imagen"
                   value="<?php echo $libro['imagen']; ?>">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $libro['descripcion']; ?></textarea>

            <input type="submit" value="Guardar">

        </form>

        <a href="home.php">Volver</a>

    </div>

</body>
</html>
