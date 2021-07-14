<?php

require_once('01-conexao.php');
require_once('04-marcas.php');

if ($conectado) {
    $marcas = getMarcas();

}

?>