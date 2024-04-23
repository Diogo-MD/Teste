<?php
//// Números e Operadores

// Operações Básicas
$num1 = 10;
$num2 = 5;
echo "Valor A: $num1 e Valor B: $num2<br><br>";

// Soma
$soma = $num1 + $num2;
echo "Soma: $soma <br>";

// Subtração
$subtracao = $num1 - $num2;
echo "Subtração: $subtracao <br>";

// Multiplicação
$multiplicacao = $num1 * $num2;
echo "Multiplicação: $multiplicacao <br>";

// Divisão
$divisao = $num1 / $num2;
echo "Divisão: $divisao <br>";

// Módulo (Resto da divisão)
$modulo = $num1 % $num2;
echo "Módulo: $modulo <br>";



// Operações de Incremento e Decremento
$num = 5;
echo "Valor base para incremento e decremento = $num <br>";

// Incremento
$num++;
echo "Incremento: $num <br>";

// Decremento
$num--;
echo "Decremento: $num <br>";



// Operadores de Comparação
$num1 = 10;
$num2 = 5;

// Igualdade
echo "Igual a: ";
echo $num1 == $num2 ? "Verdadeiro <br>" : "Falso <br>";

// Diferente
echo "Diferente de: ";
echo $num1 != $num2 ? "Verdadeiro <br>" : "Falso <br>";

// Maior que
echo "Maior que: ";
echo $num1 > $num2 ? "Verdadeiro <br>" : "Falso <br>";

// Menor que 
echo "Menor que: ";
echo $num1 < $num2 ? "Verdadeiro <br>" : "Falso <br><hr>";



//// Operadores Lógicos

// E Lógico (AND)
echo "E lógico (AND)<br>";
echo "Verdadeiro e Verdadeiro: ";
echo true && true ? "Verdadeiro <br>" : "Falso <br>";

echo "Verdadeiro e Falso: ";
echo true && false ? "Verdadeiro <br>" : "Falso <br>";

echo "Falso e Verdadeiro: ";
echo false && true ? "Verdadeiro <br>" : "Falso <br>";

echo "Falso e Falso: ";
echo false && false ? "Verdadeiro <br>" : "Falso <br><hr>";

// Ou Lógico (OR)
echo "Ou lógico (OR)<br>";
echo "Verdadeiro e Verdadeiro: ";
echo true || true ? "Verdadeiro <br>" : "Falso <br>";

echo "Verdadeiro e Falso: ";
echo true || false ? "Verdadeiro <br>" : "Falso <br>";

echo "Falso e Verdadeiro: ";
echo false || true ? "Verdadeiro <br>" : "Falso <br>";

echo "Falso e Falso: ";
echo false || false ? "Verdadeiro <br>" : "Falso <br>"; 
?>