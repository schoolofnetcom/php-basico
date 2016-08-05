<?php

// Calculadora com PHP:

$value1 = 10;
$value2 = 3;
$operator = "%";

// teste de operação:



if($operator == "+"){
	echo "Soma = ".($value1 + $value2);
}elseif($operator == "-"){
	echo "Subtração = ".($value1 - $value2);
}elseif($operator == "/"){
	echo "Divisão = ".($value1 / $value2);
}elseif($operator == "*"){
	echo "Multiplicação = ".($value1 * $value2);
}else{
	echo "Operador não existe!";
}



?>