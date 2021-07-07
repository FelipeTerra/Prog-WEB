<?php

require_once('Pessoa.php');

class Genitor extends Pessoa {
    protected $filhos;

    public function __construct($nome='', $idade=0, $cpf=0){
        parent::__construct($nome, $idade, $cpf);
        $this->filhos = [];
    }
    
    public function adicionarFilho($filho){
        $this->filhos[] = $filho;
    }

    // public function removerFilho($filho){
    //     $this->filhos[] -= $filho;
    // }


    // public function setFilhos(){
    //     $this->nome = $nome;
    // }
    
    public function getFilhos(){
        return $this->filhos;
    }

}

?>