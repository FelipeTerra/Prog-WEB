<?php

require_once('Pessoa.php');

class Filho extends Pessoa {

    public function __construct($nome='', $idade=0, $cpf=0){
        parent::__construct($nome, $idade, $cpf);
    }

    function getHtml(){
        return "<p>" .
        "Nome: "  .  $this->getNome()   ." | ".
        "Idade: " .  $this->getIdade()  ." | ".
        "CPF: "   .  $this->getCPF()    ." | ".
        "</p>";
    }

}