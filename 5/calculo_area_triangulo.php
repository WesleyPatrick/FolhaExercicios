<?php
function calcularAreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = isset($_POST['base']) ? (float)$_POST['base'] : 0;
    $altura = isset($_POST['altura']) ? (float)$_POST['altura'] : 0;

    $area = calcularAreaTriangulo($base, $altura);

    echo "<h2>A área do triângulo retângulo com base {$base} metros e altura {$altura} metros é " . number_format($area, 2) . " metros quadrados.</h2>";
} else {
    echo "<h2>envie os dados pelo formulário</h2>";
}
?>
<br>
<a href="index.php">Voltar</a>