<?php

class Cliente {
    // Atributos da classe
    public $id;
    public $nome;
    public $idade;
    public $cidade;
}

$c1 = new Cliente();
$c1->id = 1;
$c1->nome = "Felipe Terra";
$c1->idade = 28;
$c1->cidade = "Rondonópolis";

$c2 = new Cliente();
$c2->id = 2;
$c2->nome = "Amanda Sampaio Terra";
$c2->idade = 25;
$c2->cidade = "Rondonópolis";

var_dump($c1);
echo "<br>";
var_dump($c2);
echo "<br>";
?>