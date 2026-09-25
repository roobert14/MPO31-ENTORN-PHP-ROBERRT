<?php
$edat = 15;
/*
echo 'hola';

$edat = 24;
$asignatura = 8;
#condicional simple if else
if ($edat >=18){
    echo("Ets major d'edat");
}else{
    echo "Ets menor";
}

if ($asignatura <= 10){
    echo("Repites");
}else{
    echo ("Has aprobado");
}
*/
?>
<?php if ($edat >=18):?>
<p>ERES MAYOR DE EDAD</p>
<?php else:?>
        <p>Eres menor de edad</p>
        <?php endif;?>
