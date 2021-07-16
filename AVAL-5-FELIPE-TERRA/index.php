<?php

require_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação - 05 - Felipe Terra</title>

    <link rel="stylesheet" href="./Styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat: wght @ 100; 200; 300; 400; 500; 600; 700; 800; 900 & display = swap"
        rel="stylesheet">
</head>

<body>
    <header><h1>Cadastro de Produtos</h1></header>

    <main class="container">
        <section id="form">
            <p><h2>Informe os dados do produto</h2></p>

            <form action="conteudo.php" method="POST">
                <imput type="hidden" name="id" value="">

                <table id="table-form">

                    <?php
                        

                        // echo "<p><input class=\"card\" type=\"text\" name=\"nome\" placeholder=\"Nome do Produto\"></p>";
                        if($valida_erro['nome']['ok']){
                            echo "<tr>";
                                echo "<td id=\"table-name\">Nome</td>";
                                echo "<td><input class=\"card-normal\" type=\"text\" name=\"nome\" value= ".$valida_erro['nome']['valor']."></td>";
                            echo "<tr>";                    
                        }
                        else {
                            echo "<tr>";
                                echo "<td id=\"table-name\">Nome</td>";
                                echo "<td><input class=\"card-normal\" type=\"text\" name=\"nome\" value= ".$valida_erro['nome']['valor']."></td>";
                            echo "<tr>";
                        }
                    
                        if($valida_erro['marca']['ok']){
                            echo "<tr>";
                                echo "<td id=\"table-name\">Marca</td>";
                                echo "<td><input class=\"card-normal\" type=\"text\" name=\"marca\" value= ".$valida_erro['marca']['valor']."></td>";
                            echo "<tr>";  
                        }
                    
                        if($valida_erro['quantidade']['ok']){
                            echo "<tr>";
                                echo "<td id=\"table-name\">Quantidade</td>";
                                echo "<td><input class=\"card-normal\" type=\"number\" name=\"quantidade\" value= ".$valida_erro['quantidade']['valor']."></td>";
                            echo "<tr>";
                        }
                    
                        if($valida_erro['quantidade']['ok']){
                            echo "<tr>";
                                echo "<td id=\"table-name\">Quantidade</td>";
                                echo "<td><input class=\"card-normal\" type=\"number\" name=\"preco\" value= ".$valida_erro['preco']['valor']."></td>";
                        }                       

                    ?> 


                </table>              

                <p><button id="button" type="submit" name="acao" value="Incluir"><h1>Incluir</h1></button></p>

            </form>          
        </section>

        <section id="table">
            <p><h2>Lista de Produtos</h2></p>

            <table id="data-table">
                <thead>
                    <tr>
                        <th>Nome do Produto</th>
                        <th>Marca</th>
                        <th>Quantidadde</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        global $produtos;
                        if (count($produtos)){
                            foreach ($produtos as $produto){
                                echo "<tr>";
                                    echo "  <td>" . $produto['nome'] . "</td>";
                                    echo "  <td>" . $produto['marca'] . "</td>";
                                    echo "  <td>" . $produto['quantidade'] . "</td>";
                                    echo "  <td>" . $produto['preco'] . "</td>";
                                echo "</tr>";
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
        <p>Atividade Avaliativa - 2 - Felipe Terra Nascimento de Oliveira</p>
        <p>RGA: 201611640044</p>
    </footer>

</body>

</html>