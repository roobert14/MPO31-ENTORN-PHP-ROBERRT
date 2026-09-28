<?php for($i =1; $i <=11; $i++): ?>
    <section>
        <div>Tabla <?= $i?></div>
        <?php for($j =1; $j <=10; $j++): ?>
            <?php $res = $i * $j?>
            <div><?= $i?> x  <?= $j ?> = <?= $res?></div>
        <?php endfor; ?>
    </section>
<?php endfor; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos2.css">
    <title>Taules de multiplicar</title>
</head>
<body>
    
</body>
</html>