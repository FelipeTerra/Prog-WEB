<?php

require_once(__DIR__ . '/../model/produto.php');
require_once(__DIR__ . '/../db/db.php');

//DAO - Data Access Object
class daoProduto {
    
    private $connection;

    public function __construct(Db $connection) {
        $this->connection = $connection;        
    }

    public function inserir(Produto $produto): bool {
        $sql = "INSERT INTO produtos (nome) VALUES(?)";
        $stmt = $this->connection->prepare($sql);
        $res = false;
        if ($stmt) {
          $nome = $produto->getNome();
          $stmt->bind_param('s', $nome);
          if ($stmt->execute()) {
              $id = $this->connection->getLastID();
              $produto->setId($id);
              $res = true;
          }
          $stmt->close();
        }
        return $res;
    }

    public function todos(): array {
        $sql = "SELECT id, nome FROM produtos";
        $stmt = $this->connection->prepare($sql);
        $produtos = [];
        if ($stmt) {
          if ($stmt->execute()) {
            $id = 0; $nome = '';
            $stmt->bind_result($id, $nome);
            $stmt->store_result();
            while($stmt->fetch()) {
              $produtos[] = new Produto($id, $nome);
            }
          }
          $stmt->close();
        }
        return $produtos;
    }
      
}

?>