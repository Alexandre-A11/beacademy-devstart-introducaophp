<?php

$frutas = [
    "Laranja",
    "Banana",
    "Uva",
];

// Adicionar frutas no array
$frutas[] = "Maçã";

$frutas[10] = "Melância";

$frutas[7] = "Morango";

$frutas[] = "Abacaxi"; // 11

var_dump($frutas);

?>

<ul>
    <?php foreach ($frutas as $fruta) : ?>
        <li><?= $fruta ?></li>
    <?php endforeach; ?>
</ul>