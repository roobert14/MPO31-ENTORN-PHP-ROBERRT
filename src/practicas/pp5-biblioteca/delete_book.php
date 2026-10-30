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
    eliminarLibro($id);
}

header('Location: home.php');
exit;

?>
