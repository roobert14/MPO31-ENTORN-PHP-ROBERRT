<?php

$numero = rand(1, 100);
$chivato = 0;

?>

<div class="rand">Numero Generado: <?= $numero ?></div>
<div class="rand">Divisores de <?= $numero ?> : 
<?php
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        echo $i . " ";
        $chivato++;
    }
}
?>
</div>

<?php if ($chivato == 2): ?>
    <div class="rand">El <?= $numero ?> es primo</div>
<?php else: ?>
    <div class="rand">El <?= $numero ?> NO es primo</div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos4.css">
    <title>Divisors d'un nombre i verificació de nombre</title>
</head>
<body>
    
</body>
</html>