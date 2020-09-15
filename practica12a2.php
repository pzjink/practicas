<?php
$a = array(8, 786, 45, 4, 63, 89, 1478, 98);
$encontrado = FALSE;
$buscado = 89;
$i = 0;
do {
    if ($a[$i] == $buscado) {
        $encontrado = TRUE;
        echo "Se ha encontrado el nro: $buscado <br>";
    } else {
        echo "No se ha encontrado. <br>";
    }
    $i++;
} while ((!$encontrado) && ($i <= 7));
