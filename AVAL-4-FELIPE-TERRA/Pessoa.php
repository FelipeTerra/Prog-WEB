<?php

abstract class Pessoa {
    protected $nome, $idade, $cpf;

    public function __construct($nome, $idade, $cpf){
        $this->nome     = $nome;
        $this->idade    = $idade;
        $this->cpf      = $cpf;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;
    }

    public function getCPF(){
        return $this->cpf;
    }
}

?>