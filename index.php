<?php
use didinka\Humans;
require "vendor/autoload.php";

Class MyClass extends Humans
{


}
$obj = new MyClass;
echo "Parent class".$obj->name."<br/>";   # it will output Johnson Didinya

$obj->setName("peter");
echo $obj->getName();

?>