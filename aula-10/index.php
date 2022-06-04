<?php

declare(strict_types=1);

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    8,
    9.4,
    5,
    6,
];

function mediaNotas(array $notas): float {
    $total = array_sum($notas);
    $quantidade = count($notas);

    /*
    foreach ($notas as $nota) {
        $total += $nota;
    }
    */

    return $total / $quantidade;
}

echo mediaNotas($notasCursoA) . PHP_EOL;
echo mediaNotas($notasCursoB) . PHP_EOL;
