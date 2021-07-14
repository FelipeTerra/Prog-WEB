<?php

$host    = "127.0.0.1";
$user    = "root";
$passwr  = "";
$db      = "vendas";

$mysqli = new mysqli($host, $user, $passwr, $db);
$conecado = false;

if (!$mysqli->connect_errno){
    echo "<p>Conectado ao banco de dados!</p>";
    $conecado = true;
}
else{
    echo "<p>Não conectado ao banco de dados. Erro na conexão</p>";
    die();
}

?>