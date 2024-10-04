<?php
function calcularMontante($valor_vista, $taxa_juros, $parcelas) {
    return $valor_vista * (1 + $taxa_juros * $parcelas);
}

function calcularParcela($montante, $parcelas) {
    return $montante / $parcelas;
}

$valor_vista = 8654.00;

$opcoes_parcelamento = [
    24 => 0.015,
    36 => 0.020,
    48 => 0.025,
    60 => 0.030
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelamento de Moto</title>
</head>
<body>
    <h1>Opções de Parcelamento para a Moto</h1>
    <ul>
        <?php
        foreach ($opcoes_parcelamento as $parcelas => $taxa_juros) {
            $montante = calcularMontante($valor_vista, $taxa_juros, $parcelas);
            $valor_parcela = calcularParcela($montante, $parcelas);
            echo "<li>Para $parcelas parcelas a uma taxa de " . ($taxa_juros * 100) . "% ao mês, o valor da parcela será de R$ " . number_format($valor_parcela, 2, ',', '.') . "</li>";
        }
        ?>
    </ul>
</body>
</html>