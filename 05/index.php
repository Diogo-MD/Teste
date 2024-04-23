<?php
//// Introdução a ARRAYS em PHP

// Definição de Array's 
$frutas = array("Maçã", "Banana", "Laranja", "Morango");
$numeros = [1, 2, 3, 4, 5];
$alunos = array("João" => 18, "Maria" => 2, "Pedro" => 19);

// Acessando elementos do Array
echo "A segunda fruta é: " . $frutas[1] . "<br>";
echo "O Terceiro número é : " . $numeros[2] . "<br>";
echo "A idade do João é: " . $alunos["João"] . "<br>";

// Alterar elementos do Array
$frutas[0] = "Pêra";
$numeros[4] = 10;
$alunos["Maria"] = 21;

// Adicionando Elementos ao Array
$frutas[] = "Abacaxi";
$numeros[] = 6;
$alunos["Ana"] = 22;

// Percorrendo um Array com um foreach
echo "Lista de frutas: ";
foreach ($frutas as $fruta) {
    echo " " . $fruta;
}
echo "<br>";

// Percorrendo um Array com um foreach
echo "Lista de números: ";
foreach ($numeros as $numero) {
    echo " " . $numero;
}
echo "<br>";

// Percorrendo um Array com um foreach
echo "Lista de alunos: ";
foreach ($alunos as $nome => $idade) {
    echo "<br>" . $nome . ", e sua idade: " . $idade;
}
echo "<br>";

// Funções úteis para Arrays
echo "Número de elementos no Array de Frutas: " . count ($frutas) . "<br>";
echo "Índice da fruta 'Laranja' no Array: " . array_search("Laranja",  $frutas) . "<br>";
echo "Última fruta do Array: " . end($frutas) . "<br>";
echo "Array de frutas antes de reverter: " . "<br>";
print_r($frutas);
echo "<br>";
echo "Array de frutas depois de reverter: " . "<br>";
$frutas_revertidas = array_reverse($frutas);
print_r($frutas_revertidas);

?>