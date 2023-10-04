<?php

function calculadora($a, $b) {
    $multi=$a*$b;
    echo "La multiplicacion es : $multi <br/>";
    $suma=$a+$b;
    echo "La suma es: $suma <br/>";
    $resta=$a-$b;
    echo "La resta es: $resta <br/>";
    $divi=$a/$b;
    echo "La divicion es : $divi <br/>";
}
calculadora(5, 100);
?>
