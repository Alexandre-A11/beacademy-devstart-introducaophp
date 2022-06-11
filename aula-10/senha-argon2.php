<?php
$senha = "123456";

password_hash($senha, PASSWORD_DEFAULT) . "<br>";

echo password_hash($senha, PASSWORD_ARGON2I) . "<br>"; // Recomendado!
echo password_hash($senha, PASSWORD_ARGON2I) . "<br>";

$hash = '$argon2i$v=19$m=65536,t=4,p=1$M2p1YlZWMElBU0VGRXhzeQ$5p55YmK/3VjyB7MWS4EWeJ1cpl1DNUPqFEYQmCVvAcg';
if (password_verify($senha, $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
