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
echo "<hr>";

// Modo 02
echo "<p>Listando marcas - Modo 02</p>";
$sql = "SELECT id, nome FROM marcas";
$res = $mysqli->query($sql);

if  ($res) {
    echo "<p>Foram encontrads $res->num_rows registros.</p>";
    echo "<ul>";
    while ($dados = $res->fetch_assoc()) {
        echo "<li>" . $dados['id'] . " - " . $dados['nome'] . "</li>";
    }
    echo "</ul>";

    mysqli_free_result($res);
}
echo "<hr>";

// Modo 03
echo "<p>Listando marcas - Modo 03</p>";
$sql = "SELECT id, nome FROM marcas";
$stmt = $mysqli->prepare($sql);

if ($stmt) {
    $stmt->execute();
    $stmt->bind_result($res_id, $res_nome);
    if ($stmt->store_result()) {
        echo "<p>Foram encontrads $stmt->num_rows registros.</p>";
        if ($stmt->num_rows()){
            echo "<ul>";
            while ($stmt->fetch()) {
                echo "<li> $res_id - $res_nome </li>";
            }
            echo "</ul>";
        }
    }
    $stmt->close();
}
echo "<hr>";

// Modo 04
echo "<p>Listando marcas - Modo 04</p>";
$sql = "SELECT id, nome FROM marcas";
$res = $mysqli->query($sql);

if  ($res) {
    echo "<p>Foram encontrads $res->num_rows registros.</p>";
    //$arr = $res->fetch_all(MYSQLI_NUM); // informa pelo índice no array
    $arr = $res->fetch_all(MYSQLI_ASSOC); // informa pelo nome do atributo

    echo "<ul>";
    foreach ($arr as $marca) {
        echo "<li>" . $marca['id'] . " - " . $marca['nome'] . "</li>";
    }
    echo "</ul>";
    mysqli_free_result($res);
}
echo "<hr>";



?>