<?php
    $db = 1234.56;
    $preco = number_format($db, 2, ",", "."); //Formata o número
    echo "O produto custa R$".$preco;
    echo "<br><hr>";

    echo round(55.4)."<br>"; //Arredonda
    echo ceil(5.2)."<br>"; //Arrendonda sempre pra cima
    echo floor(5.9)."<br>"; //Arrendonda sempre pra baixo
    echo "<br><hr>";

    echo rand(1, 20); //Gera um nº aleatório entre 1 e 20