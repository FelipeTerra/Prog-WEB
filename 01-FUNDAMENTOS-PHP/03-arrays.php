<?php 
    //trabalhando com arrays dentro do PHP

    //Métodos de criação de arrays
    $Array = [1,2,3,4,5,]; //declaração a partir do colchetes
    var_dump($Array);
    echo("<br>");

    $Array = array(); //declaração a partir da palavra reservada array
    $Array[] = 1;
    $Array[] = 2.30; //posso incluir itens de vários tipos
    $Array[] = false;
    $Array[] = "Quatro"; 
    $Array[] = [10,20,30,40,50]; // também é possivel incluir um array dentro de outro array
    var_dump($Array);

    //impressão na posição arrays normais
    echo("<p>Valor do Array na posição 3: $Array[3]</p>");

    //Indexação via String ou arrays Associativos
    echo("<br><hr>");

    echo("<h2> Arrays Associativos </h2>");    
    $Arrayb ['a'] = 10;
    $Arrayb ['b'] = 20;
    $Arrayb ['c'] = 30;
    $Arrayb ['d'] = 40;
    var_dump($Arrayb);

    //impressão na posição arrays associativos
    echo("<p>Valor do Arrayb na posição C: $Arrayb[c]</p>");

    //Sintaxe alternativa - guardando dados dentro de um Array
    $joao ['nome']     = "João";
    $joao ['idade']    = 28;
    $joao ['cidade']   = "Rondonópolis";
    $joao ['uf'] = "MT";
    echo("<p></p><hr></hr>");
    var_dump($joao);

    $maria ['nome']     = "Maria";
    $maria ['idade']    = 22;
    $maria ['cidade']   = "Cuiabá";
    $maria ['uf'] = "MT";
    echo("<p></p><hr></hr>");
    var_dump($maria);

    //Array com outros arrays dentro
    $pessoas = [$joao, $maria];
    echo("<p></p><hr></hr>");
    echo("<h2> Array de Pessoas </h2>");
    var_dump($pessoas);
?>
