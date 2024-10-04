<?php
function calcularValor($quantidade, $preco) {
    return $quantidade * $preco;
}

function calcularTotalCompra($itens) {
    $total = 0;
    foreach ($itens as $item) {
        $total += calcularValor($item['quantidade'], $item['preco']);
    }
    return $total;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itens = [
        ['quantidade' => (float)$_POST['maca_qtd'], 'preco' => (float)$_POST['maca_preco']],
        ['quantidade' => (float)$_POST['melancia_qtd'], 'preco' => (float)$_POST['melancia_preco']],
        ['quantidade' => (float)$_POST['laranja_qtd'], 'preco' => (float)$_POST['laranja_preco']],
        ['quantidade' => (float)$_POST['repolho_qtd'], 'preco' => (float)$_POST['repolho_preco']],
        ['quantidade' => (float)$_POST['cenoura_qtd'], 'preco' => (float)$_POST['cenoura_preco']],
        ['quantidade' => (float)$_POST['batatinha_qtd'], 'preco' => (float)$_POST['batatinha_preco']]
    ];

    $total = calcularTotalCompra($itens);

    $dinheiro_disponivel = 50.00;

    if ($total > $dinheiro_disponivel) {
        $mensagem = "O valor total da compra foi de R$ " . number_format($total, 2) . ". Joãozinho não tem dinheiro suficiente. Ele precisa de mais R$ " . number_format($total - $dinheiro_disponivel, 2) . ".";
        $classe_cor = 'vermelho';  
    } elseif ($total < $dinheiro_disponivel) {
        $mensagem = "O valor total da compra foi de R$ " . number_format($total, 2) . ". Joãozinho ainda pode gastar R$ " . number_format($dinheiro_disponivel - $total, 2) . ".";
        $classe_cor = 'azul';  
    } else {
        $mensagem = "O valor total da compra foi de R$ " . number_format($total, 2) . ". Joãozinho gastou todo o dinheiro disponível.";
        $classe_cor = 'verde'; 
    }

    echo "<html>
            <head>
                <link rel='stylesheet' href='style.css'>
            </head>
            <body>
                <h1 class='$classe_cor'>$mensagem</h1>
            </body>
          </html>";
}
?>
