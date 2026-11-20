<?php
require_once('config.php');

$pdo = db();

// ----------------------------------------------------
// PROCESSAR EL FORMULARI
// ----------------------------------------------------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = trim($_POST['nom'] ?? '');
    $descripcio = trim($_POST['descripcio'] ?? '');
    $videojocId = $_POST['videojoc_id'] ?? '';

    if ($nom !== '' && $descripcio !== '' && $videojocId !== '') {

        $sql = '
            INSERT INTO personatges
            (usuari_id, videojoc_id, nom, descripcio)
            VALUES
            (:usuari_id, :videojoc_id, :nom, :descripcio)
        ';

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'usuari_id' => 1,
            'videojoc_id' => $videojocId,
            'nom' => $nom,
            'descripcio' => $descripcio
        ]);

        echo '<p>Personatge creat correctament!</p>';

    } else {
        echo '<p>Cal omplir tots els camps.</p>';
    }
}

// ----------------------------------------------------
// OBTENIR VIDEOJOCS PER AL SELECT
// ----------------------------------------------------

$sql = 'SELECT id, nom FROM videojocs ORDER BY nom';

$stmt = $pdo->query($sql);

$videojocs = $stmt->fetchAll();

?>

<h1>Crear personatge</h1>

<form method="post">

    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>

    <br><br>

    <label for="descripcio">Descripció:</label>
    <textarea id="descripcio" name="descripcio" required></textarea>

    <br><br>

    <label for="videojoc_id">Videojoc:</label>

    <select id="videojoc_id" name="videojoc_id" required>

        <option value="">Selecciona un videojoc</option>

        <?php foreach ($videojocs as $videojoc): ?>

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
