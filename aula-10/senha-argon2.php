<?php
$senha = "123456";

echo password_hash($senha, PASSWORD_DEFAULT) . "<br>";

echo password_hash($senha, PASSWORD_ARGON2I) . "<br>"; // Recomendado!
echo password_hash($senha, PASSWORD_ARGON2I) . "<br>";
