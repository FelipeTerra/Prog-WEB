<?php

require_once('Genitor.php');
require_once('Filho.php');

class Familia {
    public $Pai, $Mae, $Filhos;

    public function __construct(Genitor $pai, Genitor $mae)
    {
        $this->Pai = $pai;
        $this->Mae = $mae;
        $this->Filhos = [];        
    }

    public function setPai(Genitor $pai){
        $this->Pai = $pai;
    }
    public function getPai(){
        return $this->Pai;
    }

    public function setMae(Genitor $mae){
        $this->Mae = $mae;
    }
    public function getMae(){
        return $this->Mae;
    }

    public function addFilho(Filho $filho){
        $this->Filhos[] = $filho;
        $this->Pai->adicionarFilho($filho);
        $this->Mae->adicionarFilho($filho);
    }

    public function removeFilho(Filho $filho){
        $this->Pai->removerFilho($filho);
        $this->Mae->removerFilho($filho);
    }

    public function getFilho(){
        return $this->Filhos;
    }

    // essa parte deu um trabalho bem chatinho em, mas pelo meos deu certo
    function getHtml(){
        
        $f = "</ul>";
        for($i = 0; $i < count($this->Filhos); ++$i){
            $teste = $this->Filhos[$i];
            $f .= "<li>".$teste->getHtml()."</li>";
        }
        $f .= "</ul>";

        return
        "<p> ------------- Pais ------------- </p>" .
        "Dados Pai -> " . $this->Pai->getHtml() .
        "Dados Mãe -> " . $this->Mae->getHtml() .

        "------------- Filhos ------------- </p>" . $f
        ."<br><br>"; 
    }
}

?>