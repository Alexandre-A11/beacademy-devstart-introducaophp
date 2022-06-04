<?php

$url = $_SERVER["REQUEST_URI"];

/*
if ($url === "/") {
    echo "<h1>Página Inicial</h1>";
} elseif ($url === "/login") {
    echo "<h1>Login</h1>";
} elseif ($url === "/cadastro") {
    echo "<h1>Cadastro</h1>";
} else {
    echo "<h1>Página não encontrada</h1>";
}
*/

echo match ($url) {
    "/" => "<h1>Página Inicial</h1>",
    "/login" => "<h1>Login</h1>",
    "/cadastro" => "<h1>Cadastro</h1>",
    default => "<h1>Página não encontrada</h1>",
};
