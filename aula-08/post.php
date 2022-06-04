<form action="" method="post">
    <input type="text" name="name" placeholder="Nome">

    <button>Enviar</button>
</form>

<?php
if ($_POST) {
    echo "Nome: {$_POST["name"]}<br>";
}
