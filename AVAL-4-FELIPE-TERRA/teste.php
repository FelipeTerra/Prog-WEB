<?php

//importanto as classes
require_once('Genitor.php');
require_once('Filho.php');
require_once('Familia.php');

//criando os genitores
$g1 = new Genitor("Felipe Terra",     28, 201611640055);
$g2 = new Genitor("Amanda Sampaio",   25, 201611640055);
$g3 = new Genitor("Gebram Schinider", 25, 201611640055);
$g4 = new Genitor("Olívia Fernandes", 25, 201611640055);
$g5 = new Genitor("Tiago Borto",      25, 201611640055);
$g6 = new Genitor("Sonia Sobral",     25, 201611640055);

//criando os filhos e passando seus pais como parâmetro
$filho1 = new Filho($g1, $g2, "Pedro Oliveira",   10, 201611640055);
$filho2 = new Filho($g1, $g2, "Gustavo Oliveira", 6, 201611640055);
$filho3 = new Filho($g4, $g3, "Maria Costa",      6, 201611640055);
$filho4 = new Filho($g4, $g3, "João Pedro",       6, 201611640055);
$filho5 = new Filho($g6, $g5, "Maria Antônia",    6, 201611640055);
$filho6 = new Filho($g6, $g5, "Sabrina Canto",    6, 201611640055);

//criando as famílias e adicionando os filhos da família
$familia1 = new Familia($g1, $g2);
$familia1->addFilho($filho1);
$familia1->addFilho($filho2);
$familia1->removeFilho($filho1); // não sei o pp, mas não deu certo =(

$familia2 = new Familia($g3, $g4);
$familia2->addFilho($filho3);
$familia2->addFilho($filho4);

$familia3 = new Familia($g5, $g6);
$familia3->addFilho($filho5);
$familia3->addFilho($filho6);



//criando o array de famílias
$familias = [$familia1, $familia2, $familia3];

//tentando imprimir kkkkkkkkkkk não sei bem o que fiz aqui kkkkkkkkkk mas deu certo
$imprimir;
for($i = 0; $i < count($familias); ++$i){
    echo "<p> ----- Dados Família ". $i+1 . " ----- </p>";
    $imprimir = $familias[$i];
    echo $imprimir->getHtml();  
}



