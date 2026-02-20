<?php
    //Meus dados
    $nome = "Pedro Henrique";
    $idade = 23;
    $alt = 1.70;

    $i=1;

    while($i<=10){
        echo "Meu nome é $nome, tenho $idade anos e $alt de altura.";
        echo "<br>";
        $i++;
    };
    echo "<br>";

    //Alterando meus dados
    $nome = "Fofão";
    $idade = 15;
    $alt = 1.78;

    for($i=1; $i<=10; $i++) {
        echo "Meu nome é $nome, tenho $idade anos e $alt de altura.";
        echo "<br>";
    };

    /*
    Nomes válidos:      Nomes inválidos:
    $nome               $123456nome
    $_meunome           $carro*&!2#
    $carro10            $meu carro
    $nota1
    $meu_nome           OBS: é casa sensitive.
    $meu_nome
    */

