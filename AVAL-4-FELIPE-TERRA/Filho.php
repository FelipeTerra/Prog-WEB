<?php

require_once('Pessoa.php');
require_once('Genitor.php');

class Filho extends Pessoa {
    protected $Pai, $Mae;

    public function __construct($nome='', $idade=0, $cpf=0, $teste=''){
        parent::__construct($nome, $idade, $cpf,$teste);
        // $this->Pai = $pai;
        // $this->Mae = $mae;
    }

    public function setPai(Genitor $pai){
        $this->Pai = $pai;
    }
    

    function getHtml(){
        return "<p>" .
        "Nome: "  .  $this->getNome()   ." | ".
        "Idade: " .  $this->getIdade()  ." | ".
        "CPF: "   .  $this->getCPF()    ." | ".
        "</p>";
    }

}