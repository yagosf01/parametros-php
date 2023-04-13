<?php
    function multiplicacao() {

        $x = 5;
        $y = 6;
        $g = 3;

        $resultado = $x * $y * $g; 

        echo $resultado . "<br>";

    }

    multiplicacao();

    function nome() {
        $nome = "Yago";
        $sobrenome = "Figueredo";

        echo $nome . " " . $sobrenome . "<br>";
    }

    nome();

    function saudacao($nome , $idade, $genero) {
        echo "Ola eu sou $genero $nome e tenho $idade anos <br>";
    }

    saudacao("Yago", "17", "o");
    saudacao("Laura", "19", "a");

    function vericacao($num){
        if ($num % 2 === 0){
            echo "Par <br>";
        } else {
            echo "Impar <br>";
        }
    }

    vericacao(4);
    vericacao(11);

    $arr =[];

    for ($i = 0; $i <= 30; $i++) {
        array_push($arr, $i);

    }

    print_r($arr);
