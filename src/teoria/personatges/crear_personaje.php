<?php
require_once('config.php');
$pdo = db();

$sql = 'SELECT id, nom FROM videojocs ORDER BY nom';
$stmt = $pdo->query($sql);
//convertirlo a array
$v = $stmt->fetchAll();

?>


<form method="POST" action="">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>

    <br><br>

    <label for="descripcio">Descripció:</label>
    <textarea id="descripcio" name="descripcio" required></textarea>

    <br><br>

    <label for="videojoc_id">Videojoc:</label>
    <select id="videojoc_id" name="videojoc_id" required>
        <option value="">Selecciona un videojoc</option>

        <?php foreach ($v as $videojoc): ?>
            <option value="<?= $videojoc['id'] ?>">
                <?= $videojoc['nom'] ?>
            </option>
        <?php endforeach; ?>

    </select>

    <br><br>

    <button type="submit">
        Crear personatge
    </button>
</form>
