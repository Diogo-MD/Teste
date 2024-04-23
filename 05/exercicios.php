<?php

//Exercício 1 - Acesso a Elementos:
//Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
$week = array("Segunda-feira", "Terça-feira", "Quarta-Feira", "Quinta-feira", "Sexta-feira", "Sábado", "Domingo");
echo $week[2];

//Exercício 2 - Alteração de Elementos:
//Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".
$months = ["jan", "fev", "mar", "abr", "mai", "jun", "jul", "ago", "set", "out", "nov", "dez"];
$months[count($months) - 1] = "Dezembro";
echo "Último mês do ano alterado para: " . end($months) . "<br>";

//Exercício 3 - Adição de Elementos:
//Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.
$array_vazio = [];
for ($i = 1; $i <= 5; $i++) {
    $array_vazio[] = $i;
}
$array_vazio[] = 6;
print_r($array_vazio);
echo "<br>";

//Exercício 4 - Percorrendo um Array:
//Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.
$months = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
echo "Meses do ano: ";
foreach ($months as $month) {
    echo "<br>" . $month;
}

//Exercício 5 - Contagem de Elementos:
//Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.
echo "<br>Quantidade de dias na semana: " . count($week);

//Exercício 6 - Busca de Elemento:
//Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.
echo "<br>Posição do Sábado: " . array_search("Sábado", $week) . "<br>";

//Exercício 7 - Reversão de Array:
//Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.
$contagem = range(1, 10);
$contagem_reversa = array_reverse($contagem);
echo "Contagem reversa de 1 à 10: ";
print_r($contagem_reversa);
echo "<br>";
