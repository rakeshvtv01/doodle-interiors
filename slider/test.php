<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
$dir = "images/";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a);
print_r($b);
	
	
	
$str= file_get_contents("warning.txt");
print_r (explode("-",$str));

?>
</body>
</html>