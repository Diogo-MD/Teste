<?php 
    function nomeDaFuncao() {
        // Bloco de código da função
    }

    // Declaração de Função sem parâmetros e sem retorno
    function saudacao() {
        echo "Olá, TII04";
    }

    saudacao(); // Chamada da função

    // Declaração de uma função que retorna um valor
    function saudacao_retorno() {
        return "Olá, TII04% <br>";
    }

    echo saudacao_retorno(); // Chamada de função com retorno

    // Declaração de uma função que recebe parâmetro
    function saudacao_parametro($nome) {
        echo "Olá, $nome& <br>";
    }

    saudacao_parametro("TII04"); // Chamada de função com retorno   


    // Declaração de uma função que recebe um parâmetro e retorna algo
    function saudacao_paramentro_retorno($nome) {
        return "Olá, $nome* <br>";
    }
    echo "<br>";

    echo saudacao_paramentro_retorno("TII04");

    //Declaração de uma função que recebe dois parâmetros e realiza o retorno
    function soma ($a, $b) {
        return $a + $b;
    }

    echo "A soma de 8 com 16 é: " . soma(8, 16);

    # Escopo das Variáveis ! ! !

    $mensagem = "<br> Olá"; // Variável Global

    function mostrarMensagem() {
        $mensagem = "Mundo <br>"; // Variável Local
        echo $mensagem; //Saida: Mundo
    }
    
    echo $mensagem; // Saida: Olá
?>