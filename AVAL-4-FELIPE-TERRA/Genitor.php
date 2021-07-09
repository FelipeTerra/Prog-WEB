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
        $i = "";
        for ($i = 0; $i < count($this->filhos); ++$i){
            if($this->filhos[$i]->getNome() == $filho->getNome()){
                break;
            }
        }
        array_splice($this->filhos, $i, 1);      
    }

    public function setFilhos($filhos) { 
        $this->filhos = $filhos;
    }

    public function gFilhos(){
        return $this->filhos;
    }
    
    public function getFilhos(){
        return $this->filhos;
    }

    function getHtml(){
        return
        "Nome: "  .  $this->getNome()   ." | ".
        "Idade: " .  $this->getIdade()  ." | ".
        "CPF: "   .  $this->getCPF()    ." | ".
        "</p>";
    }

}

?>