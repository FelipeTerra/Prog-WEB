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

    public function removerFilho(Filho $filho){

        for ($i = 0; $i < count($this->filhos); ++$i){
            if($this->filhos[$i]->getNome() == $filho->getNome()){
                unset($this->filhos[$i]);
            }
        }       
    }
    
    public function getFilhos(){
        return $this->filhos;
    }

    function getHtml(){
        return "<p>" .
        "Nome: "  .  $this->getNome()   ." | ".
        "Idade: " .  $this->getIdade()  ." | ".
        "CPF: "   .  $this->getCPF()    ." | ".
        "</p>";
    }

}

?>

<!-- public function setFilhos(){
    $this->nome = $nome;
} -->