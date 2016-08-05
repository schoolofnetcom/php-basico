<?php 

// Repeat loop:

// for:

/*
for($i = 0;$i<=100;$i++){
	echo "list ".$i."<br/>";

}
*/

// while:

/*$i = 0;
while($i < 10){
	echo "list ".$i."<br/>";

	$i++;

}*/


 ?>

 <h1>Repeat loop</h1>

 <h3>Using For</h3>
 <ul>
 	<?php 
 		$i = 0;
 		while($i<=30){
 	?>
 	<li>list <?php echo $i; ?></li>
 	<?php 	
 			$i++;
 		} 
	?>
	 

 </ul>

