<?php

echo $_GET['search']."<br/>";
echo $_SERVER['PHP_SELF']."<br/>";
echo $_REQUEST['pt']." im something else"."<br/>";
echo $_GET['blogid']." iscool";
echo "<br/>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>
<a href="index.g.php">return</a>

<div>
    <?php 
        $thing = 5;
        echo (isset($thing)? 'value1':'value2');

        if ($_SERVER['REQUEST_METHOD']=="POST"){
            echo "<br/>"."true";
            if($_REQUEST['pt']){
                echo $_REQUEST['pt']."awsome";
            }
        }else{
            echo false;
        }
    ?>
</div>