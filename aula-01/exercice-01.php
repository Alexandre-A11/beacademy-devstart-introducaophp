<!-- Exercício Proposto: 
      Criar dois campos a + e simular calculadora. -->

<form action="" method="post">
  <h3>Calculadora</h3>
  <input name="x" type="number">
  <select name="calc">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input name="y" type="number">

  <button>Enviar</button>
</form>

<?php
if ($_POST) {
  $x = (int) $_POST['x'];
  $y = (int) $_POST['y'];

  switch ($_POST['calc']) {
    case '+':
      $result = $x + $y;
      break;
    case '-':
      $result = $x - $y;
      break;
    case '*':
      $result = $x * $y;
      break;
    case '/':
      $result = $x / $y;
      break;
  }

  echo "<h3>Resultado</h3>";
  echo $result;
}


?>