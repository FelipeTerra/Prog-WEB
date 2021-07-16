<?php

require_once(__DIR__ . '/../db/db.php');
require_once(__DIR__ . '/../model/produto.php');
require_once(__DIR__ . '/../dao/daoProduto.php');
require_once(__DIR__ . '/../config/config.php');


$conn = Db::getInstance();

if (! $conn->connect()) {
    die();
}

$daoProduto = new DaoProduto($conn);

$novoProduto = new Produto($_POST['nome']);

$daoProduto->inserir( $novoProduto);
    
header('Location: ./index.php');

?>