<?php

require_once('Pessoa.php');
require_once('Filho.php');

class Genitor extends Pessoa {
    protected $filhos;

    public function __construct($nome='', $idade=0, $cpf=0){
        parent::__construct($nome, $idade, $cpf);
        $this->filhos = [];
    }
    
    public function adicionarFilho(Filho $filho){
        $this->filhos[] = $filho;
    }

    public function removerFilho($filho){
        $this->filhos[] -= $filho;
    }
    
    public function getFilhos(){
        return $this->filhos;
    }

    function getHtml(){
        $f = "<ul>";
        foreach($this->filhos as $l){
            $f .= "<li>$l</li>";
        }
        $f .= "</ul>";

        return "<p>" .
        "Nome: "  .  $this->getNome()   ." | ".
        "Idade: " .  $this->getIdade()  ." | ".
        "CPF: "   .  $this->getCPF()    ." | ".
        "</p>" .$f;
    }

}

?>

<!-- public function setFilhos(){
    $this->nome = $nome;
} -->