<?php
use didinka\Humans;
require "vendor/autoload.php";

Class MyClass extends Humans
{

}
$obj = new MyClass;
echo "Parent class".$obj->name."<br/>";   # it will output Johnson Didinya

/*
 * another inheritance
 * */

Class SecondClass extends MyClass
{
    Public function register()
    {

    }
}

$newob2 = new SecondClass;
echo "Parent class".$newob2->getName()."<br/>"; #outputs Johnson Didinya

?>