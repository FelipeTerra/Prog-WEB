<?php

require_once('Genitor.php');
require_once('Filho.php');
require_once('Familia.php');

$g1 = new Genitor("Felipe Terra", 28, 201611640055);
$g2 = new Genitor("Amanda Sampaio", 25, 201611640055);
$g3 = new Genitor("Olívia Fernandes", 25, 201611640055);
$g4 = new Genitor("Gebram Schinider", 25, 201611640055);

$filho1 = new Filho($g1, $g2, "Pedro Oliveira", 10, 201611640055);
$filho2 = new Filho($g1, $g2, "Gustavo Oliveira", 6, 201611640055);
$filho3 = new Filho($g3, $g4, "Maria Costa", 6, 201611640055);
$filho4 = new Filho($g3, $g4,"João Pedro", 6, 201611640055);

$familia1 = new Familia($g1, $g2, $filho1);


echo "<p> ----- Genitores ----- </p>";
echo $g1->getHtml();
echo $g2->getHtml();
echo $g3->getHtml();
echo $g4->getHtml();

echo "<p> ----- Filhos ----- </p>";
echo $filho1->getHtml();
echo $filho2->getHtml();
echo $filho3->getHtml();
echo $filho4->getHtml();

echo "<p> ----- Dados Família ----- </p>";
echo $familia1->getHtml();


//$g1->removerFilho($f2);


