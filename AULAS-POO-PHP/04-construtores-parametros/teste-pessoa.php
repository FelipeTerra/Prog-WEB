<?php
require_once('pessoa.php');

$p1 = new Pessoa();
$p1->setNome("Felipe");
$p1->setIdade(28);

$p2 = new Pessoa("Amanda", 25);

echo $p1->getHtml();
echo $p2->getHtml();
?>