<?php

// Operadores Aritméticos

$salario = 2000;
$salarioDaMaria = 3000;

$salario = $salario + 200;
$salarioDaMaria = $salarioDaMaria + 200;

$salario += 200;
$salarioDaMaria += 200;
$salario -= 500;

$numero = 20;

$numero = $numero + 1;
$numero += 1;
$numero++;

// Concatenação
const NOME = "Alexandre";
const SOBRENOME = "Almeida";
$idade = 30;
$cidade = "Montes Claros";

echo NOME . " " . SOBRENOME;

echo "Eu me chamo " . NOME . " " . SOBRENOME . ", tenho {$idade} anos e moro em {$cidade}";
?>


<!-- Operadores Lógicos -->
<?php

$numero = 10;

/*
== Igualdade
=== Igualdade +
> maior que
< menor que
>= maior ou igual
<= menor ou igual
! negação
!= diferente
!== Diferente +
*/

echo $numero === 11;
?>

<!-- Operador Ternário -->
<?php
$idade = 17;

echo $idade >= 18 ? "Maior de idade" : "Menor de idade";

echo "<br>";

echo isset($nome) ? $nome : "Não existe";

echo "<br>";

echo $nome ?? "Não existe"; // Spread Operator

?>
<!-- Exercício Proposto: -->
<br>
<a href="./exercice-01.php">Exercício Tabela</a>