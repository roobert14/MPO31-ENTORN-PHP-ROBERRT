<?php for($i =1; $i <=11; $i++): ?>
    <div>Tabla <?= $i?></div>
    <?php for($j =1; $j <=10; $j++): ?>
        <?php $res = $i * $j?>
        <div><?= $i?> x  <?= $j ?> = <?= $res?></div>
    <?php endfor; ?>
<?php endfor; ?>