<?php
    $nome = "pedro henrique";
    echo $nome."<br>";

    $novoNome = strtoupper($nome);
    echo $novoNome."<br>";

    $novoNome = strtolower($nome);
    echo $novoNome."<br>";
    echo "<hr>";

    $repeat = str_repeat("Pedro Henrique ", 5);
    echo $repeat;
    echo "<br>";

    $tamanho = strlen($nome);
    echo $tamanho;
    echo "<br>";
    echo strlen($nome);
    echo "<br><hr>";

    $texto = "Quero que o Brasil perca a copa do mundo 2026.";
    $novoTexto = str_replace("Brasil", "Argentina", $texto);
    echo $novoTexto."<br>";
    
    echo str_replace("perca", "ganhe", $texto);
    echo "<br>";

    echo strpos($texto, "Brasil");