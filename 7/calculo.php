<?php
function calcularTotalFinanciado($valor_parcela, $numero_parcelas) {
    return $valor_parcela * $numero_parcelas;
}
function calcularJuros($total_financiado, $valor_carro_vista) {
    return $total_financiado - $valor_carro_vista;
}

$valor_carro_vista = 22500.00; 
$valor_parcela = 489.65;       
$numero_parcelas = 60;          

$total_financiado = calcularTotalFinanciado($valor_parcela, $numero_parcelas);
$juros = calcularJuros($total_financiado, $valor_carro_vista);

echo "Valor à vista do carro: R$ " . number_format($valor_carro_vista, 2, ',', '.') . "<br>";
echo "Total gasto no financiamento: R$ " . number_format($total_financiado, 2, ',', '.') . "<br>";
echo "Valor gasto em juros: R$ " . number_format($juros, 2, ',', '.') . "<br>";
?>
