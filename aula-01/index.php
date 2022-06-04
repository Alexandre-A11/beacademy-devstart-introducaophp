<!-- GET: mostra informações diretamente na URL
    POST: oculta informações 
    
    Iniciar Servidor:
    php -S localhost:8000 -t aula-01 
    -S = Servidor
    -t = Informa que será usado um diretório, no caso "aula-01"-->

<form action="" method="post">
  <input name="nome" placeholder="Nome"> <br>
  <input name="cidade" placeholder="Cidade"> <br>
  <button>Enviar</button>
</form>

<?php
if ($_POST) {
  echo "Olá " . $_POST['nome'] . "! <br>";
}
?>


<a href="./exercice-01.php">Exercício 01</a>