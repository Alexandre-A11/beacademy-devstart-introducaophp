<select>
    <option selected>--Selecione o Ano--</option>
    <?php
    /*
    for ($ano = 2022; $ano >= 1900; $ano--) {
        echo "<option value='$ano'>$ano</option>";
    }
    */

    $ano = 2022;

    while ($ano >= 1900) {
        echo "<option>$ano</option>";
        $ano--;
    }
    ?>
</select>