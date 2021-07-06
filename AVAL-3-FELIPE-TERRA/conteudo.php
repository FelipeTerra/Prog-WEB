<?php
    session_start();
    $dados = isset($_SESSION['produtos']) ? $_SESSION['produtos'] : [];
    

    //session_destroy();

    function gerarId(){
        if (isset($_SESSION['lastID']))
            ++$_SESSION['lastID'];
        else
            $_SESSION['lastID'] = 1;
        return  $_SESSION['lastID'];
    }
    
    function cadastrarProduto($dadosProduto){
        global $dados;
        $id = gerarId();
        $dadosProduto['id'] = $id;
        $dados[$id] = $dadosProduto;
        $_SESSION['produtos'] = $dados; //gravando os dados na sessão
        header('location: http://localhost/prova/form.php'); // retprnando para a página principal
    }

    function empacotaForm() {
        $dados = [];
        $dados['nome']          = $_POST['nome'];
        $dados['marca']         = $_POST['marca'];
        $dados['quantidade']    = $_POST['quantidade'];
        $dados['preco']         = $_POST['preco'];

        if (isset($_POST['id']) && $_POST['id'] != '')
            $dados['id'] = $_POST['id'];
        return $dados;
        
    }


    function validaForm() {
        $validaOk = true;
        $erros = [];
        if (isset($_POST['nome']) && isset($_POST['marca']) && isset($_POST['quantidade']) && isset($_POST['preco'])){ // verificando se os campos foram setados
            
            // verificando se os valores nome estão dentro dos limites
            if ((strlen($_POST['nome']) < 2) || (strlen($_POST['nome']) > 100)){ 
                $validaOk = false;

                // verificando qual o tipo do erro
                if(strlen($_POST['nome']) < 2){

                    $erros['nome'] = [
                            'valor'      => $_POST['nome'],
                            'ok'         => false,
                            'msg'        => 'O nome do produto deve ser maior ou igual a 2 caracteres'
                    ];
                }
                elseif (strlen($_POST['nome']) > 100){

                    $erros['nome'] = [
                        'valor'      => $_POST['nome'],
                        'ok'         => false,
                        'msg'        => 'O nome do produto deve ser menor ou igual a 100 caracteres'
                    ];
                }
            }

            //gravando o imput caso atenda aos requisitos
            if ((strlen($_POST['nome']) >= 2) || (strlen($_POST['nome']) <= 100)){ 
                $erros['nome'] = [
                    'valor'      => $_POST['nome'],
                    'ok'         => true,
                    'msg'        => ''
                ];
            }

            // verificando se os valores marca estão dentro dos limites
            if ((strlen($_POST['marca']) < 2) || (strlen($_POST['marca']) > 20)){
                $validaOk = false;

                // verificando qual o tipo do erro
                if(strlen($_POST['marca']) < 2){

                    $erros['marca'] = [
                        'valor'      => $_POST['marca'],
                        'ok'         => false,
                        'msg'        => 'A marca do produto deve ser maior ou igual a 2 caracteres'
                    ];
                }
                elseif (strlen($_POST['marca']) > 20){

                    $erros['marca'] = [
                        'valor'      => $_POST['marca'],
                        'ok'         => false,
                        'msg'        => 'A marca do produto deve ser menor ou igual a 20 caracteres'
                    ];
                }
            }

            //gravando o imput caso atenda aos requisitos
            if ((strlen($_POST['marca']) >= 2) || (strlen($_POST['mcarca']) <= 20)){ 
                $erros['marca'] = [
                    'valor'      => $_POST['marca'],
                    'ok'         => true,
                    'msg'        => ''
                ];
            }            

            // verificando se os valores quantidade estão dentro dos limites
            if (($_POST['quantidade'] == "") || ($_POST['quantidade'] > 100)){
                $validaOk = false;

                // verificando qual o tipo do erro
                if($_POST['quantidade'] == ""){

                    $erros['quantidade'] = [
                        'valor'      => $_POST['quantidade'],
                        'ok'         => false,
                        'msg'        => 'A quantidade deve ser maior ou igual a 0'
                    ];
                }
                elseif ($_POST['quantidade'] > 100){

                    $erros['quantidade'] = [
                        'valor'      => $_POST['quantidade'],
                        'ok'         => false,
                        'msg'        => 'A quantidade deve ser menor ou igual a 100'
                    ];
                }
            }

             //gravando o imput caso atenda aos requisitos
            if (($_POST['quantidade'] > 0) || ($_POST['quantidade'] < 100)){ 
                $erros['quantidade'] = [
                    'valor'      => $_POST['quantidade'],
                    'ok'         => true,
                    'msg'        => ''
                ];
            }

            // verificando se os valores preço estão dentro dos limites
            if (($_POST['preco'] == "")){
                $validaOk = false;
                $erros['preco'] = [
                    'valor'      => $_POST['preco'],
                    'ok'         => false,
                    'msg'        => 'O preço deve ser maior ou igual a 0'
                ];
            }

             //gravando o imput caso atenda aos requisitos
            if ($_POST['preco'] > 0){ 
                $erros['preco'] = [
                    'valor'      => $_POST['preco'],
                    'ok'         => true,
                    'msg'        => ''
                ];
            }
            
            
        }
        
        switch ($validaOk){

            case false:
                $_SESSION['erros'] = $erros;
                header('location: http://localhost/prova/form.php'); // retprnando para a página principal                
            break;

            case true:
                return $validaOk;
            break;
        }
    }

    function processAction($acao){
        switch($acao){
            case 'Incluir':
                if  (validaForm()) {
                    $dadosProduto = empacotaForm();
                    cadastrarProduto($dadosProduto);                    
                }           
            break;
        }
    }

    if (isset($_POST['acao']) && $_POST['acao'] != '')
        processAction($_POST['acao']);
 
?>