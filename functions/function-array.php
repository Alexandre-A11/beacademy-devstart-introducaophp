<?php

declare(strict_types=1);

function mostrarNome(array $nomes): void {
    foreach ($nomes as $nome) {
        echo "Nome: " . $nome . PHP_EOL;
    }
}


$nomes = ["Alexandre", "Almeida", "Alves"];
