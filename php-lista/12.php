<?php
function calcularArray($numeros) {
    $soma = array_sum($numeros);

    $maior = max($numeros);

    $menor = min($numeros);

    return [
        'soma' => $soma,
        'maior' => $maior,
        'menor' => $menor,
    ];
}

$meuArray = [3, 7, 2, 9, 4];

$resultado = calcularArray($meuArray);

echo "Array: " . implode(", ", $meuArray) . "<br>";
echo "Soma: " . $resultado['soma'] . "<br>";
echo "Maior número: " . $resultado['maior'] . "<br>";
echo "Menor número: " . $resultado['menor'] . "<br>";
?>
