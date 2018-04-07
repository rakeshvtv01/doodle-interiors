<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	file_put_contents("warning.txt", "");
$file = fopen("warning.txt","w");
echo fwrite($file,"Hello World . Testing!");
fclose($file);
?>
	
</body>
</html>