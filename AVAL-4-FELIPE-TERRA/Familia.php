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

    public function getFilho(){
        return $this->Filhos;
    }

    function getHtml(){
        // $f = "<ul>";
        // foreach ($this->Filhos as $i){
        //     $f .= "<li> $i </li>";
        // }
        // $f .= "</ul>";
        return "<p>" .
        "Nome do Pai: " .  $this->Pai->getNome() ." | ".
        "Nome da Mãe: " .  $this->Mae->getNome() ." <br> ".
        "</p>";
    }
}

?>
<!-- "Nome: "        .  $this->getNome()   ." | ".
"Idade: "       .  $this->getIdade()  ." | ".
"CPF: "         .  $this->getCPF()    ." | ". -->