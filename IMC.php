<?php

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

switch (true) {
    case ($imc < 18.5):
        echo "Abaixo do peso";
        break;
    case ($imc >= 18.6 && $imc <= 24.9):
        echo "Peso ideal (parabéns)";
        break;
    case ($imc >= 25.0 && $imc <= 29.9):
        echo "Levemente acima do peso";
        break;
    case ($imc >= 30.0 && $imc <= 34.9):
        echo "Obsevidade Grau I";
        break;
    case ($imc >= 35.0 && $imc <= 39.9):
        echo "Obseidade grau II (severa)";
        break;
    case ($imc >= 40):
        echo "Obesidade III (mórbida)";
        break;
}

