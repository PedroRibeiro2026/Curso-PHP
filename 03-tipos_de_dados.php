<?php
    /********** Escalares **********/
    //string
    $nome = "Olá mundo"; // "123" é uma string por conta das aspas.
    var_dump($nome);
    if(is_string($nome)) {
        echo "É uma string";
    } else {
        echo "Não é uma string";
    };
    echo "<hr>";

    //int
    $idade = 27.4;
    var_dump($idade);
    if(is_int($idade)) {
        echo "É um inteiro";
    } else {
        echo "Não é um inteiro";
    };
    echo "<hr>";

    //float
    $alt = 1.77;
    var_dump($alt);
    if(is_float($alt)) {
        echo "É um inteiro";
    } else {
        echo "Não é um inteiro";
    };
    echo "<hr>";

    //booleano
    $admin = false;
    var_dump($admin);
    if(is_bool($admin)) {
        echo "É um booleano";
    } else {
        echo "Não é um booleano";
    };
    echo "<hr>";

    /********** Compostos **********/
    //array
    $carros = array("Gol", "Uno", "Camaro",12, 20.6, true);
    var_dump($carros);
    echo "<hr>";

    //object
    class Cliente {
        public $nome;
        
        public function atribuirNome($nome) {
            $this->nome = $nome;
        }
    };

    $cliente = new Cliente();
    $cliente->atribuirNome("Pedoro Henrique");
    var_dump($cliente);

    $usuario = new Cliente();
    $usuario->atribuirNome("Ana Rita");
    var_dump($usuario);

    if(is_object($cliente)) {
        echo "É um objeto";
    } else {
        echo "Não é um objeto";
    };
    echo "<hr>";

    /********** Especiais **********/
    //NULL
    $cidade = NULL;
    var_dump($cidade);

    //Resource
    //Utilizado para fazer referência a recursos externos, conexão c/ banco de dados, manipulação de arquivos.