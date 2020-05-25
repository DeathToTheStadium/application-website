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
