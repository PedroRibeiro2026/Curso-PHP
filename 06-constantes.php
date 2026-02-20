<?php
    //Contantes
    define("NOME", "Pedro Henrique");
    define("IDADE", 37);
    define("ALTURA", 1.71);
    define("CASADO", true);

    //Pode definir arrays
    define("PAÍSES", ['Brasil', 'Argentina', 'Iraque']);

    echo 'Meu nome é '.NOME.', tenho  '.IDADE.' anos, '.ALTURA.' de altura e vivo no '.PAÍSES[2].'.';
    echo "<hr>";

    function exibeNome(){
        echo NOME;
    };
    exibeNome();
    echo "<hr>";



    foreach(PAÍSES as $pais) {
        echo $pais."<br>";
    };