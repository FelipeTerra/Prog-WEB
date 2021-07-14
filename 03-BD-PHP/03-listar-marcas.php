<?php

require_once('01-conexao.php');

// Modo 01
echo "<p>Listando marcas - Modo 01</p>";
$sql = "SELECT id, nome FROM marcas";
$res = $mysqli->query($sql);
// retorna 'false' caso enha erros ou um 'objeto' se tudo ocorrer certo

if  ($res) {
    echo "<p>Foram encontrads $res->num_rows registros.</p>";
    echo "<ul>";
    while ($dados = $res->fetch_row()) {
        echo "<li>" . $dados[0] . " - " . $dados[1] . "</li>";
    }
    echo "</ul>";

    mysqli_free_result($res);
}

echo "<hr>;"



?>