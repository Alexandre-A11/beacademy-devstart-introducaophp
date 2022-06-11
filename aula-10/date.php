<?php

$dia = date("H:i:s");


echo $dia;


// trocar fuso horário
date_default_timezone_set('America/Sao_Paulo');
echo $created_at = date("Y-m-d H:i:s");
