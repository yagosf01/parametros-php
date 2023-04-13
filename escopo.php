<?php

    $a = 10;

    function testeEscopo() {
        $a = 5;

        echo "ESCOPO LOCAL DE A $a <br>";
    }

    echo "ESCOPO GLOBAL DE A $a <br>";

    testeEscopo();