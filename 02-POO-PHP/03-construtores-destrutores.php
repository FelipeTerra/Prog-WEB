<?php

class Exemplo{
    private $atributo_privado;
    private $atributo_publico;

    public function __construct(){
        echo "<h1> Olá Mundo </h1>";
        $this->atributo_puclico = "Inicializando";
    }

    public function __destruct(){
        echo "<h1> Tchau Mundo </h1>";
    }

    public function setAtributo($atr){
        if (isset($atr))
            $this->atributo_privado = $atr; 
    }
    
    public function getAtributo($atr){
       return $this->atributo_privado; 
    }
}

$p = new Exemplo();
$p->setAtributo("Atriuto Privado Ok");
var_dump($p);

?>