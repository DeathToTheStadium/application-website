<?php


require "__framework/core/Framework.class.php";


Framework::run();

class funny_deals{
    public $thing;
    public static function loads($thing){
        echo $thing.__CLASS__;
    }
}

$fun = new funny_deals;

$fun->loads("hello im:");