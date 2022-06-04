<?php

$arquivo = fopen("./produtos.csv", "a+");

fwrite($arquivo, "1;Notebook;1599.99" . PHP_EOL);
fwrite($arquivo, "2;Mouse;29.99" . PHP_EOL);
fwrite($arquivo, "3;Teclado;69.99" . PHP_EOL);

fclose($arquivo);
