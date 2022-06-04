<!-- Nome Preço Descrição Foto -->
<?php

$product_01 = [
    "name" => "Elden Ring",
    "price" => "250,00",
    "description" => "O NOVO RPG DE AÇÃO E FANTASIA. Levante-se, Maculado, e seja guiado pela graça para portar o poder do Anel Prístino e se tornar um Lorde Prístino nas Terras Intermédias.",
    "image" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1245620/header.jpg?t=1649774637",
];

$product_02 = [
    "name" => "Hollow Knight: Silksong",
    "price" => "150,00",
    "description" => "Discover a vast, haunted kingdom in Hollow Knight: Silksong! The sequel to the award winning action-adventure. Explore, fight and survive as you ascend to the peak of a land ruled by silk and song.",
    "image" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1030300/header.jpg?t=1572306963",
];

$product_03 = [
    "name" => "Hades",
    "price" => "50,00",
    "description" => "Desafie o deus dos mortos enquanto você batalha para sair do Submundo neste jogo roguelike dos mesmos criadores de Bastion, Transistor e Pyre.",
    "image" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1145360/header.jpg?t=1624463563",
];

$product_04 = [
    "name" => "Bloodstained: Ritual of the Night",
    "price" => "65,00",
    "description" => "Bloodstained: Ritual of the Night is an exploration-focused, side-scroller action RPG by Koji Igarashi. Play as Miriam, an orphan scarred by an alchemist's curse that slowly crystallizes her body. Battle through a demon-infested castle and defeat its master to save yourself, and all of humanity!",
    "image" => "https://cdn.cloudflare.steamstatic.com/steam/apps/692850/header.jpg?t=1648760663",
];

$product_05 = [
    "name" => "Monster hunter Rise",
    "price" => "180,00",
    "description" => "Encare o desafio e junte-se à caça! Em Monster Hunter Rise, o capítulo mais recente da premiada e bem-sucedida série Monster Hunter, você vai se tornar um caçador, explorar mapas novos e usar diversas armas para derrotar monstros assustadores como parte de uma nova história.",
    "image" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1446780/header.jpg?t=1652718794",
];

$products = [
    $product_01,
    $product_02,
    $product_03,
    $product_04,
    $product_05,
];

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
    body {
        background-color: #333;
    }
</style>
<div class="container">
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Descrição</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $product["name"] ?></td>
                    <td><?= $product["price"] ?></td>
                    <td><?= $product["description"] ?></td>
                    <td><img src="<?= $product["image"] ?>" alt="<?= $product["name"] ?>"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>