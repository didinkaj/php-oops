<?php
trait Human
{
    function sayHello() {
        echo "Hello";
    }
}

trait person
{
    function sayName() {
        echo "peter ";
    }
}

class Greeting
{
    use Human, person;
}

$world = new Greeting();
echo $world->sayHello() . "<br/> " . $world->sayName(); //Hello peter
?>
<h1>Traits in PHP</h1>

