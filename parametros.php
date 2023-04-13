<?php
    function velocidade($vel) {
        echo "O carro chega a velocidade de $vel km/h <br>";
    }

    velocidade(100);
    velocidade(300);

    $velocidade2 = 130;

    velocidade($velocidade2);

    function descreverAnimal($nome, $raca) {
        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Dark", "pinsher");
    descreverAnimal("Shark", "tubarao");