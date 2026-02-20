<?php
    //Arrays
    $carros = array("Gol", "Fusca", "Montana");

    print_r($carros);
    echo "<br>";
    echo $carros[1];

    $carros[] = "Silverado"; //Incluindo no array
    echo "<br>";
    print_r($carros);

    echo "<hr>";

    $motos = array(); //Criando o array vazio
    $motos[] = "Biz";
    print_r($motos);
    echo "<hr>";

    //Também pode criar o array assim:
    $clientes = ["Pedro Henrique", "Isabela", "Luan"];
    print_r($clientes);

    echo "<hr>";

    for($i=0; $i <count($carros); $i++){
       echo $carros[$i]."<br>";
    }
    echo "<hr>";

    $i = 0;
    while($i < count($carros)){
        echo $carros[$i]."<br>";
        $i++;
    }
    echo "<hr>";
    /**********************************/
    //Count - Quantidade de elementos no array
    echo count($carros);
    echo "<br>";
    echo count($motos);
    echo "<br>";

    $totalClientes = count($clientes);
    echo $totalClientes;
    echo "<br>";
    echo "<hr>";

    //Foreach - Percorre os elementos do array
    foreach($carros as $i){
        echo $i."<br>";
    };
    echo "<br>";
    echo "<hr>";

    /*********** Arrays Associativos ************/
    $pessoa = array("nome"=> "Pedro Henrique", "idade"=> 38, "altura"=>1.71);
    $pessoa["cidade"] = "Redenção";
    print_r($pessoa);
    echo $pessoa["nome"]; //O índice não é 0, 1, 2...
    echo "<br>";

    foreach($pessoa as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    };

    echo "<br>";
    echo "<hr>";

    /*********** Arrays Multidimensionais ************/
    $times = array(
                "cariocas" => array("vasco", "flamengo", "botafogo"),
                "paulistas" => array("santos", "sao paulo", "palmeiras"),
                "baianos" => array("bahia", "vitoria", "itabuna")
                );

    $times = [
                "cariocas" => ["vasco", "flamengo", "botafogo"],
                "paulistas" => ["santos", "sao paulo", "palmeiras"],
                "baianos" => ["bahia", "vitoria", "itabuna"]
                ];
                 

    print_r($times);
    echo "<br>";
    foreach($times["cariocas"] as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    };

    echo "<br>";
    echo "<hr>";

    $cor = "azul";

    switch($cor){
        case "vermelho":
            echo "Sua cor preferida é o vermelho";
            break;
        case "verde":
            echo "A cor é verde.";
            break;
        default:
            echo "Todas as cores";
        };
        echo "<br>";
        echo "<hr>"; 

        $cont = 1;
        while($cont <= 10) {
            echo $cont." ";
            $cont++;
        };
        echo "<br>";
        echo "<hr>";

        $cont = 99;
        do {
            echo "O contador é $cont <br>";
            $cont++;
        } while ($cont <= 10);
        echo "<br>";
        echo "<hr>";

        for ($i = 1; $i <=10; $i++){
            echo "5 x $i = ".($i*5)."<br>";
        };

        $cidade = ["Redex", "CDA", "Cumarú", "Xinguara"];
        var_dump($cidade);
        echo "<br>";

        foreach($cidade as $indi => $nome){
            echo $indi." - ".$nome."<br>";
        };
