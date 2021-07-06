<?php

require_once('aluno.php');

$a1 = new Aluno("Felipe Terra", 28, 201611640055);
$a2 = new Aluno("Amanda Sampaio", 21, 201121631010);
$a3 = new Aluno("Pedro Henrique", 30, 201625434010);

$a1->addLinguagem("PHP");
$a1->addLinguagem("Python");
$a1->addLinguagem("C++");
$a1->addLinguagem("Delphi");
$a1->addLinguagem("C#");

$a2->addLinguagem("C++");
$a2->addLinguagem("Javascript");
$a2->addLinguagem("Dataflex");

$a3->addLinguagem("C++");
$a3->addLinguagem("Pascal");

echo $a1->getHtml();
echo $a2->getHtml();
echo $a3->getHtml();

var_dump($a1);
var_dump($a2);
var_dump($a3);

?>