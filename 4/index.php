<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <h1>Cálculo da Área de um Retângulo</h1>
    <form action="calcula_area_retangulo.php" method="POST">
        <label for="ladoA">Comprimento do lado A (em metros):</label>
        <input type="number" name="ladoA" id="ladoA" required step="0.01">
        <br>
        <label for="ladoB">Comprimento do lado B (em metros):</label>
        <input type="number" name="ladoB" id="ladoB" required step="0.01">
        <br>
        <button type="submit">Calcular Área</button>
    </form>
</body>
</html>
