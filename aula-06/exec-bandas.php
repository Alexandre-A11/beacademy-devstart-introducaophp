<?php

$bandas = [
    ["Dream Theater", "Heavy Metal"],
    ["Metallica", "Heavy Metal"],
    ["Iron Maiden", "Heavy Metal"],
    ["Link Park", "Rock"],
    ["Nickelback", "Rock"]
];
?>

<table>
    <thead>
        <th>Banda</th>
        <th>Estilo</th>
    </thead>
    <tbody>
        <?php foreach ($bandas as $banda) : ?>
            <tr>
                <td><?= $banda[0] ?></td>
                <td><?= $banda[1] ?></td>
            </tr>
        <?php endforeach; ?>
</table>