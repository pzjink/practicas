<?php
function ordenar(&$a)
{
    sort($a);
    foreach ($a as $valor) {
        echo "<li>". $valor;
    }
}
?>

<html>

<body>
    Ordenar numeros:
    <?php
        $numeros=array(2,35,22,20,15);
        ordenar($numeros);    
    ?>
</body>

</html>