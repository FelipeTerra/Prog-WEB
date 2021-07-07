<?php

class MinhaClasseBase {
    public    $atributo1;
    protected $atributo2;
    private   $atributo3;

    function __construct($at1, $at2, $at3){
        $this->atributo1 = $at1;
        $this->atributo2 = $at2;
        $this->atributo3 = $at3;
    }

    function imprimir(){
        echo "$this->atributo1, $this->atributo2, $this->atributo3 <br>";
    }
}

class MinhaSubClasse extends MinhaClasseBase {
        public function __construct($at1, $at2, $at3){
            parent:: constuct($at1, $at2, $at3);
        }

        function imprimir(){
            echo "$this->atributo1, $this->atributo2, $this->atributo3 <br>";
        }
}

$o1 = new MinhaClasseBase(1,2,3);

$o1->atributo1 = 4;
//$o1->atributo2 = 5;
//$o1->atributo3 = 6;

$o1->imprimir();


?>