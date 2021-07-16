<?php

$host    = "127.0.0.1";
$user    = "root";
$passwd  = "";
$dp      = "cadastros";

$mysqli = new mysqli($host, $user, $passwr, $db);
$conectado = false;

if (!$mysqli->connect_errno){
    echo "<p>Conectado ao banco de dados!</p>";
    $conectado = true;
}
else{
    echo "<p>Não conectado ao banco de dados. Erro na conexão</p>";
    die();
}

?>