<?php 

function nameFunction($p){
	//action
	//reurn
}

function calculator($num1,$num2,$op){
	if($op == "+"){
		return $num1 + $num2;
	}elseif($op == "-"){
		return $num1 - $num2;
	}elseif($op == "/"){
		return $num1 / $num2;
	}elseif($op == "*"){
		return $num1 * $num2;
	}else{
		return "Error!";
	}
}

$var = calculator(4,6,"$");

echo $var;


?>