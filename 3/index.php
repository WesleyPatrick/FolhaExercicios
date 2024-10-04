<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Quadrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cálculo da Área de um Quadrado</h1>
    <form action="calcula_area.php" method="POST">
        <label for="lado">Comprimento do lado do quadrado (em metros):</label>
        <input type="number" name="lado" id="lado" required step="0.01">
        <br>
        <button type="submit">Calcular Área</button>
    </form>
</body>
</html>