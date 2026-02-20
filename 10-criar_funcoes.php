<?php
    //Criando Funções
    function exibirNome($nome){
        echo "<h3>Meu nome é $nome</h3>";
    };

    exibirNome("Pedro");
    echo "<hr>";

    function media($nome, $n1, $n2, $n3, $n4){
        $media = ($n1+$n2+$n3+$n4)/4;
        if($media >= 6){
            echo "$nome foi aprovado com a média $media";
        } elseif($media >= 4){
            echo "$nome está em recuperação. Média igual a $media";
        } else {
            echo "$nome está reprovado! Média igual a $media";
        }
    };

    media("Pedro Henrique", 8, 9, 9.5, 8.9);