<?php

//// ESTRUTURAS DE REPETIÇÃO EM PHP

// EXEMPLO 1: FOR
echo "Exemplo 1: FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Numero $i <br>";
}
echo "<br>";

// Exemplo 2: While
echo "Exemplo 2: WHILE <br>";
$contador = 1;
while ($contador <= 5) {
    echo "Número $contador <br>";
    $contador++;
}
echo "<br>";

// Exemplo 3: DO WHILE
echo "Exemplo 3: DO WHILE <br>";
$contador = 1;
do {
    echo "Número: $contador <br>";
    $contador++;
} while ($contador <= 5);
echo "<br>";

// Exemplo 4: FOREACH
echo "Exemplo 4: FOREACH <br>";
$array_vogais = ["A", "E", "I", "O", "U",];
foreach ($array_vogais as $vogal) {
    echo "Vogal: $vogal <br>";
}
echo "<br>";

// Exemplo 5: BREAK e CONTINUE
echo "Exemplo 5: BREAK e CONTINUE <br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        continue; // Ignora o código abaixo e volta para o início e continuia o LOOP
    }
    
    if ($i == 8) {
        break; // Para o código
    }
    echo "Número $i <br>";
}

?>