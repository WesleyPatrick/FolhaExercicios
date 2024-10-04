<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Triângulo Retângulo</title>
</head>
<body>
    <h1>Calcular a Área de um Triângulo Retângulo</h1>
    <form action="calculo_area_triangulo.php" method="POST">
        <label for="base">Base (em metros):</label>
        <input type="number" name="base" id="base" step="0.01" required>
        <br><br>
        <label for="altura">Altura (em metros):</label>
        <input type="number" name="altura" id="altura" step="0.01" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>