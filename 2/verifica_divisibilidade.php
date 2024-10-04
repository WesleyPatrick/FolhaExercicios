<?php
function verificarDivisibilidade($numero) {
    return $numero % 2 == 0; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = isset($_POST['numero']) ? (float)$_POST['numero'] : 0;

    if (verificarDivisibilidade($numero)) {
        echo "<h2>Valor divisível por 2</h2>";
    } else {
        echo "<h2>O valor não é divisível por 2</h2>";
    }
} else {
    echo "<h2>envie um número pelo formulário</h2>";
}
?>
<br>
<a href="index.php">Voltar</a>
