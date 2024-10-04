<?php

function calcularAreaRetangulo($ladoA, $ladoB) {
    return $ladoA * $ladoB; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ladoA = isset($_POST['ladoA']) ? (float)$_POST['ladoA'] : 0;
    $ladoB = isset($_POST['ladoB']) ? (float)$_POST['ladoB'] : 0;

    $area = calcularAreaRetangulo($ladoA, $ladoB);

    if ($area > 10) {
        echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é " . number_format($area, 2) . " metros quadrados.</h1>";
    } else {
        echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é " . number_format($area, 2) . " metros quadrados.</h3>";
    }
} else {
    echo "<h2>envie os valores pelo formulário</h2>";
}
?>
<br>
<a href="index.php">Voltar</a>