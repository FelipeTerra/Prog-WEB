<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação - 05 - Felipe Terra</title>

    <link rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat: wght @ 100; 200; 300; 400; 500; 600; 700; 800; 900 & display = swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Cadastro de Produtos</h1>
    </header>

    <main class="container">
        <section id="form">
            <p><h2>Informe os dados do produto</h2></p>

            <form action="salvar.php" method="POST">
                <imput type="hidden" name="id" value="">

                    <table id="table-form">
                        <thead>
                            <tr>
                                <th><input class="card" id="id_nome" type="text" name="nome" placeholder="Nome do Pruduto" /></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button id="button" type="submit" name="acao" value="Incluir">
                                        <h1>Cadastrar</h1>
                                    </button></td>
                            </tr>
                        </tbody>
                    </table>
            </form>

        </section>

        <section id="table">
            <p><h2>Lista de Produtos</h2></p>

            <table id="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Produto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once(__DIR__ . '/../db/db.php');
                        require_once(__DIR__ . '/../config/config.php');
                        require_once(__DIR__ . '/../model/produto.php');
                        require_once(__DIR__ . '/../dao/daoProduto.php');
                        
                        $conn = new Db(Config::db_host, Config::db_user, Config::db_password, Config::db_database);
                        
                        if (! $conn->connect()) {
                            die();
                        }
                        
                        $daoProduto = new DaoProduto($conn);
                                                
                        $produtos = $daoProduto->todos();
                                                
                        ob_start();

                        if (count($produtos) > 0) {
                            foreach($produtos as $produto) {
                                echo "<tr>" .
                                        "<td>" . $produto->getId()   . "</td>" .
                                        "<td>" . $produto->getNome() . "</td>" .
                                     "</tr>";
                            }    
                        }
                        else{
                            echo "<table id= \"data-table\">";                            
                                echo "<tr>";
                                    echo "  <td><h4>Nehum produto cadastrado</h4></td>";
                                echo "<tr>";
                            echo "</table>";
                        }                    
                    ?>
                </tbody>
            </table>

        </section>

    </main>

    <footer>
        <p>Atividade Avaliativa - 5 - Felipe Terra Nascimento de Oliveira</p>
        <p>RGA: 201611640044</p>
    </footer>

</body>

</html>