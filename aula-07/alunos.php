<?php

$a1 = [
    "nome" => "Lucas",
    "email" => "lucas@email.com",
    "telefone" => "123456789",
];

$a2 = [
    "nome" => "Karen",
    "email" => "karen@email.com",
    "telefone" => "987654321",
];

$a3 = [
    "nome" => "Erika",
    "email" => "Erika@email.com",
    "telefone" => "123456789",
];

$a4 = [
    "nome" => "Fernanda",
    "email" => "fernanda@email.com",
    "telefone" => "987654321",
];

$alunos = [
    $a1,
    $a2,
    $a3,
    $a4,
];

// echo $alunos[0][0][0];
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($alunos as $aluno) : ?>
                <tr>
                    <td><?= $aluno["nome"] ?></td>
                    <td><?= $aluno["email"] ?></td>
                    <td><?= $aluno["telefone"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>