<?php

$url = $_SERVER["REQUEST_URI"];

include "./telas/head.php";
include "./action.php";
include "./telas/menu.php";

match ($url) {
    "/" => home(),
    "/login" => login(),
    "/cadastro" => cadastro(),
    "/listar" => listar(),
    "/relatorio" => relatorio(),
    default => notFound(),
};
include "./telas/footer.php";
