<?php

class Cliente {
    // Atributos da classe
    private $id;
    private $nome;
    private $idade;
    private $cidade;
    
    // Métodos Sets e Gets
    function setId($id){
        $this->id = $id;
    }
    function getId(){
        return $this->id;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }
    function getIdade(){
        return $this->idade;
    }

    function setCidade($cidade){
        $this->cidade = $cidade;
    }
    function getCidade(){
        return $this->cidade;
    }

    function getHtml(){
        return "<ul>" .
        "<li> $this->id </li>".
        "<li> $this->nome </li>".
        "<li> $this->idade </li>".
        "<li> $this->cidade </li>".
        "</ul>";
    }
}

$c1 = new Cliente();
$c1->setId(1);
$c1->setNome("Felipe Terra");
$c1->setIdade(28);
$c1->setCidade("Ronconópolis");

$c2 = new Cliente();
$c2->setId(2);
$c2->setNome("Amanda Sampaio Terra");
$c2->setIdade(25);
$c2->setCidade("Rondonópolis");

var_dump($c1);
echo "<br>";
var_dump($c2);
echo "<br>";

echo $c1->getHtml();
echo $c2->getHtml();
?>