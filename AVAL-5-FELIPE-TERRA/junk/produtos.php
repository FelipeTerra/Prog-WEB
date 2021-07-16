<?php

require_once("conexao.php");

function cadastrarProduto() {
    global $mysqli;
    $sql = "INSERT INTO produtos (nome) VALUES( ? )";
    $stmt = $mysqli->prepare($sql);

   

    if ($stmt) {
        
        $stmt->bind_param('s' , $nome);

        $stmt->close();
    } 

}

header('location: http://localhost/Prog-WEB/AVAL-5-FELIPE-TERRA/index.php'); // retprnando para a página principal

?>