<!-- Variáveis -->
<?php

$tenhoEmprego = true; // boolean
$tenhoEmprego = false;

$numeroCasa = 2006;
$cpf = "012.345.789-01"; // string
$saldoBancario = -100.00; //float 

$nome = "Alexandre";
$bebida = "Café";

echo "Olá, meu nome é $nome e gosto de $bebida";

// Constantes

define("CPF", "012.345.789-01"); // método antigo

const NOME_COMPLETO = "Alexandre";

echo "Eu me chamo " . NOME_COMPLETO;
