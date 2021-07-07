<?php

require_once('Pessoa.php');
require_once('Genitor.php');

class Filho extends Pessoa {
    protected $pai, $mae;

    public function __construct($nome='', $idade=0, $cpf=0, $teste=''){
        parent::__construct($nome, $idade, $cpf,$teste);
    }

    // public function setPai(Genitor $pai){
    //     $this->pai = $pai;
    // }

    function getHtml(){
        return "<p>" .
        "Nome: "  .  $this->getNome()   ." | ".
        "Idade: " .  $this->getIdade()  ." | ".
        "CPF: "   .  $this->getCPF()    ." | ".
        "</p>";
    }

}