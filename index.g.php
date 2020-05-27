<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

define("DS", DIRECTORY_SEPARATOR);

define("ROOT", getcwd() . DS);

define("APP_PATH", ROOT . 'application' . DS);

define("PLATFORM", isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');

echo DIRECTORY_SEPARATOR."<br>";
echo "<br>";
echo getcwd();
echo "<br>";
echo APP_PATH;
echo "<br>";
echo PLATFORM;
echo "<br>";
echo __CLASS__;
?>
<form action="function.g.php"  method="post">
	<input type="search" 
		   name='pt'
		   placeholder="search :)">
	<input type="submit" 
		   value="search">
</form>

<a href="function.g.php?blogid=2">thing</a>
</body>
</html>