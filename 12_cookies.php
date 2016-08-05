<?php 

setcookie("name","User");
setcookie("color","blue",time()+3600*24);

echo "Hello ".$_COOKIE['name'];

?>
<html>
<head>
	<title></title>
</head>
<body bgcolor="<?= $_COOKIE['color']  ?>">

</body>
</html>