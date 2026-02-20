<?php
    //ESCOPO GLOBAL
    $nome = "Pedro Henrique";
    $a = 1;
    $b = 3;
    $c = 7;

    function exibeNome() {
        global $nome;
        echo $nome;
    };

    echo exibeNome();
    echo "<hr>";
    /*************************/

    function exibeCidade() {
        //ESCOPO LOCAL
        global $cidade;
        $cidade = "Redenção";
    };

    exibeCidade();
    echo $cidade;
    echo "<hr>";
    /*************************/

    function soma() {
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }

    soma();