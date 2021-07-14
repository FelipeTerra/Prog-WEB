<?php

require_once('01-conexao.php');
require_once('04-marcas.php');

function removerMarcaAleatoria($marcas) {
    if (count($marcas) > 0) {
        $idx_marca_aleatoria = random_int(0, count($marcas)-1);
        echo "<p>Marca selecionada para ser rempovida: " . $marcas[$idx_marca_aleatoria]['nome'] . "</p>";

        $id = $marcas[$idx_marca_aleatoria]['id'];

        $ret = (removerMarca($id)) ? "sim" : "nao";
        echo "<p>Marca Atualizada: $ret</p>";
    }

}

if ($conectado) {
    $marcas = getMarcas();
    listarMarcas($marcas);
    removerMarcaAleatoria($marcas);

    $marcas = getMarcas();
    listarMarcas($marcas);
}

?>