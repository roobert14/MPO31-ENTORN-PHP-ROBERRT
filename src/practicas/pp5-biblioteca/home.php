<?php
include "functions.php";

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi biblioteca</title>

    <link rel="stylesheet" href="css/home.css">

</head>
<body>

    <div class="container">
        <div class="bienvenida">
            <div>
                <h1>
                    Bienvenido, <?php echo $_SESSION['username']; ?>
                    <?php
                    if ($_SESSION['role'] == 'admin') {
                        echo " 👑";
                    }
                    ?>
                </h1>
                <p>Bienvenido a tu biblioteca virtual.</p>
            </div>
            <img src="<?php echo $_SESSION['photo']; ?>">
        </div>
        <?php
        if ($_SESSION['role'] == 'admin') {
        ?>
            <a href="add_edit_book.php" class="agregar">
                + Agregar nuevo libro
            </a>
        <?php
        }
        ?>
        <h2 class="titulo-seccion">Nuestros libros</h2>
        <div class="libros">
            <?php
            foreach ($_SESSION['libros'] as $id => $libro) {
            ?>
                <div class="libro">
                    <img src="<?php echo $libro['imagen']; ?>">
                    <div class="informacion">
                        <h2><?php echo $libro['titulo']; ?></h2>
                        <p><strong>Autor:</strong> <?php echo $libro['autor']; ?></p>

                        <p><?php echo $libro['descripcion']; ?></p>

                        <?php
                        if ($_SESSION['role'] == 'admin') {
                        ?>
                            <a href="add_edit_book.php?id=<?php echo $id; ?>" class="editar">
                                Editar
                            </a>
                            <a href="delete_book.php?id=<?php echo $id; ?>" class="eliminar">
                                Eliminar
                            </a>
                        <?php
                        }
                        ?>

                    </div>

                </div>
            <?php
            }
            ?>
        </div>
        <a href="logout.php" class="cerrar">
            Cerrar sesión
        </a>
    </div>

</body>
</html>
