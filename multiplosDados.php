<?php
    function alterarDados($nome, $idade){
        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = alterarDados("Yago", 18);

    print_r($dados);
    echo "<br>";

    echo "Olá $dados[0], você tem $dados[1]";
