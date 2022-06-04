<!-- Exercício Proposto: 
      Criar uma tabela HTML e preencher dados via PHP -->

<?php
$nome = "Alexandre";
$sobrenome = "Almeida";
$estado = "Minas Gerais";
$nome_2 = "Karen";
$sobrenome_2 = "Koch";
$estado_2 = "Utah";

?>
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Sobrenome</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?= "<td>$nome</td>" ?>
      <?= "<td>$sobrenome</td>" ?>
      <?= "<td>$estado</td>" ?>
    </tr>
    <tr>
      <?= "<td>$nome_2</td>" ?>
      <?= "<td>$sobrenome_2</td>" ?>
      <?= "<td>$estado_2</td>" ?>
    </tr>
  </tbody>
</table>