<?php

    // Exercício 1 - Concatenação de Strings:
    // Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira"

    $nome = "Diogo";
    $profissao = "Estagiário Fodido";
    echo "Nome: ".$nome.",<br>E sua profissão: ".$profissao;
    echo "<br>";
    // Exercício 2 - Comprimento de uma String:
    // Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.

    $senha = "1234567";
    if (strlen($senha) < 8){
        echo "A Senha precisa ser maior que 8 caracteres";
    }else{
        echo "Parabéns, não esqueça";
    }   
    echo "<br>";

    // Exercício 3 - Substituição de Caracteres:
    // Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.

    $frase = "Me efetiva ai careca ;c";
    $frase_sem_ser_demitido = str_replace("careca", "chefinho", $frase);
    echo $frase_sem_ser_demitido;
    echo "<br>";
    
    // Exercício 4 - Conversão de Case:
    // Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.

    $palavra = "Boleto";
    $palavra_maiuscula = strtoupper($palavra);
    echo $palavra_maiuscula;
    echo "<br>";
    $palavra_minuscula = strtolower($palavra);
    echo $palavra_minuscula;
    echo "<br>";

    // Exercício 5 - Remoção de Espaços em Branco:
    // Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.

    $frasesemtrim = "   eu acho que PHP ja tem trim   ";
    $frasecomtrim = trim($frasesemtrim);
    echo $frasecomtrim;
    echo "<br>";

    // Exercício 6 - Posição da Primeira Ocorrência:
    // Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.

    $listacompras = "Arroz, Feijão, Carne, Leite, Açúcar, ETC...";
    $posicaoLeite = strpos($listacompras, "Leite");
    echo $posicaoLeite;
    echo "<br>";
    
    // Exercício 7 - Inversão de uma String:
    // Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.

    $listacorreta = "arara";
    $listainvertida = strrev($listacorreta);
    echo $listainvertida;
?>