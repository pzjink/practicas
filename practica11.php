<body>
<?php
    $entero = 0;
    $decimal = 0.5;
    $cadena = "hola";
    $cadena2 = "0256";
    $nulo = NULL;

    echo '<p>Valor $entero en boolean: '. (boolval($entero)) . "</p>";
    echo "<br>";
    echo '<p>Valor $decimal en boolean: '. (boolval($decimal)). "</p>";
    echo "<br>";
    echo '<p>Valor $cadena en boolean: '. (boolval($cadena)). "</p>";
    echo "<br>";
    echo '<p>Valor $cadena2 en boolean: '. (boolval($cadena2)). "</p>";
    echo "<br>";
    echo '<p>Valor $nulo en boolean: '. (boolval($nulo)). "</p>";
?>
</body>