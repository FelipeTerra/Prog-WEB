<?php

require_once('01-conexao.php');

// Modo de Insert - 01
$sql = "INSERT INTO marcas (nome) VALUES(\"Sony\")";
if ($mysqli->query($sql))
    echo "<p>Registro inserido</p>";
else
echo "<p>Fala ao inserir registro</p>";


// Modo de Insert - 02
$sql = "INSERT INTO marcas (nome) VALUES( ? )";
$stmt = $mysqli->prepare($sql);

if ($stmt) {
    $stmt->bind_param('s' , $nome);

    $nome = 'Samsung';
    $ret1 = $stmt->execute(); // retorna true ou false

    $nome = 'Apple';
    $ret2 = $stmt->execute();

    $nome = 'Asus';
    $ret3 = $stmt->execute();

    if ($ret1 && $ret2 && $ret3)
        echo "<p>Registros inseridos</p>";
    else
        echo "<p>Fala ao inserir registros</p>";

    $stmt->close();
} 




?>