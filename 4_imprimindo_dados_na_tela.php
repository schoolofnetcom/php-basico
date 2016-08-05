<?php 

$title = "User:";
$name = "Guilherme";
$last_name = "Ferreira";
$age = 31;
$email = "user@email.com";

?>

<h1><?= $title ?></h1>
<ul>
	<li>Name: <?= $name." ".$last_name; ?></li>
	<li>Age: <?php echo $age; ?></li>
	<li>E-mail: <?php echo $email; ?></li>
</ul>



