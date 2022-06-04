<?php

$bandas = [
    "Dream theater",
    "Metallica",
    "Iron Maiden",

];

echo "<ul>";

for ($n = 0; $n < count($bandas); $n++) {
    echo "<li>{$bandas[$n]}</li>";
}
echo "</ul>";
