<?php

declare(strict_types=1);

function welcome(string $nome): string {
    return "Bem vindo $nome" . PHP_EOL;
}

function soma(int $n1, int $n2): int {
    return $n1 + $n2;
}


echo soma(10, 20);

echo welcome("alexandre");
