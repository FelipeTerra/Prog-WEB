<?php

require_once('Pessoa.php');
require_once('Genitor.php');

class Filho extends Pessoa {
    protected $Pai, $Mae;

    public function __construct(Genitor $pai, Genitor $mae, $nome='', $idade=0, $cpf=0){
        parent::__construct($nome, $idade, $cpf);
        $this->Pai = $pai;
        $this->Mae = $mae;
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

    function getHtml(){
        return "<p>" .
        "Nome: "  .  $this->getNome()   ." | ".
        "Idade: " .  $this->getIdade()  ." | ".
        "CPF: "   .  $this->getCPF()    ." | ".
        "</p>";
    }

}