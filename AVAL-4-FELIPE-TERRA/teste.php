<?php

require_once('Genitor.php');
require_once('Filho.php');

$g1 = new Genitor("Felipe Terra", 28, 201611640055);
$g2 = new Genitor("Amanda Sampaio", 25, 201611640055);

$f1 = new Filho("Pedro Oliveira", 10, 201611640055);
$f2 = new Filho("Gustavo Oliveira", 6, 201611640055);
$f3 = new Filho("Maria Costa", 6, 201611640055);
$f4 = new Filho("João Pedro", 6, 201611640055);

$g1->adicionarFilho($f1);
$g1->adicionarFilho($f2);

$g2->adicionarFilho($f3);
$g2->adicionarFilho($f4);


echo $g1->getHtml();
echo $g2->getHtml();
