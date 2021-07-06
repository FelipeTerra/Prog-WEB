<?php

abstract class MeuTipo {
    protected $valor;

    function __construct($valor){
        $this->valor = $valor;
    }

    abstract function somar ($v);
    abstract function imprimir ();
}

class MeuTipoString extends MeuTipo {
    function somar($v){

    }

    function imprimir(){

    }
    

}