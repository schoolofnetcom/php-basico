<?php 

// Array

$x[0][0] = "red";
$x[0][1] = "blue";

//echo $x[0][1];

$y = array("cat","dog");

//echo $y[0];

$var1 = array(0=>"cat",1=>"dog",3=>"red",2=>"blue");
//echo $var1[3];

$var2 = array("color"=>"blue","value"=>43);
//echo $var2["color"]."<br/>";
//echo $var2["value"];

//print_r

#print_r($var1);

#echo "<br/>";

//var_dump

#var_dump($var1);

for ($i=0; $i < 4 ; $i++) { 
	#echo $var1[$i]."<br/>";
}

// error

for ($i=0; $i <2 ; $i++) { 
	#echo $var2[$i]."<br/>";
}

foreach($var1 as $key => $value) {
	echo $key." => ". $value."<br/>";
}




?>
