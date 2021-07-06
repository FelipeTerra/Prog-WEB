<?php
    echo "<h1>Variáveis PHP</h1>";

    $varString = "Helo Horld!";
    echo "<h2> $varString </h2>";

    $varBool = false;
    if ($varBool)
        echo "<h2> Verdadeiro </h2>";
    else
        echo "<h2> varBool = Falso </h2>";
        
    $varInt = 1;
    echo "<h2> varInt = $varInt  </h2>";

    // para concatenar strings
    echo "<h2>varInt = " . $varString . "</h2>";

    //testanto tipos das variáveis
    if (is_string($varString))
        echo "<h2>varString é do tipo string</h2>";
    else
        echo "<h2>varString não é do tipo string</h2>";

    if (is_bool($varBool))
        echo "<h2>varBool é do tipo Boolean </h2>";
    else
        echo "<h2>varBool não é do tipo Boolean </h2>";

    if (is_integer($varInt))
        echo "<h2>varInt é do tipo Integer </h2>";
    else
        echo "<h2>varInt não é do tipo Integer </h2>";




?>