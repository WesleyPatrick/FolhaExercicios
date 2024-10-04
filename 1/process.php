<?php
function calcularSoma($valor1, $valor2, $valor3) {
    return $valor1 + $valor2 + $valor3;
}

function determinarCor($valor1, $valor2, $valor3) {
    if ($valor1 > 10) {
        return 'blue'; 
    } elseif ($valor2 < $valor3) {
        return 'green'; 
    } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
        return 'red'; 
    } else {
        return 'black'; 
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = isset($_POST['valor1']) ? (float)$_POST['valor1'] : 0;
    $valor2 = isset($_POST['valor2']) ? (float)$_POST['valor2'] : 0;
    $valor3 = isset($_POST['valor3']) ? (float)$_POST['valor3'] : 0;

    $soma = calcularSoma($valor1, $valor2, $valor3);
    $cor = determinarCor($valor1, $valor2, $valor3);

    echo "<h2 style='color: $cor;'>Resultado da soma: " . number_format($soma, 2) . "</h2>";
} else {
    echo "<h2>Por favor, envie os dados pelo formulário.</h2>";
}
?>
