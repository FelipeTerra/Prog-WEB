<?php

$host    = "127.0.0.1";
$user    = "root";
$passwrd  = "";
$db      = "cadastros";

$mysqli = new mysqli($host, $user, $passwrd, $db);
$conectado = false;

if (!$mysqli->connect_errno){
    // echo "<p>Conectado ao banco de dados!</p>";
    $conectado = true;
}
else{
    // echo "<p>Não conectado ao banco de dados. Erro na conexão</p>";
    die();
}

?>