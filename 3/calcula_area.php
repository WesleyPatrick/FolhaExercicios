<?php

function calcularAreaQuadrado($lado) {
    return $lado * $lado; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado = isset($_POST['lado']) ? (float)$_POST['lado'] : 0;
    $area = calcularAreaQuadrado($lado);

    echo "<h2>A área do quadrado de lado $lado metros é " . number_format($area, 2) . " metros quadrados</h2>";
} else {
    echo "<h2> envie o comprimento do lado pelo formulário</h2>";
}
?>
<br>
<a href="index.php">Voltar</a>
