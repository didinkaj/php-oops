<?php

Class MyClass
{
    Public $name = "Johnson Didinya";

    private $age = 26;

    protected $company = "Cytonn investments";

    Public function setName($newName = "cytonn")
    {
        $this->name = $newName;
    }

    Public function getName()
    {
        return $this->name;
    }
}

$obj = new MyClass;
echo $obj->name;   # it will output Johnson Didinya
echo $obj->getName(); # output Cytonn
$obj->setName("Investments"); # sets the new value
echo $obj->getName(); #it will output the set value Investments
// Create two objects
$obj2 = new MyClass;   # first instance
$obj3 = new MyClass;   # second instance
// Get the value of $name from both objects
echo $obj2->getName();  # value for instance 1
echo $obj3->getName();  # value for instance 2
// Set new values for both objects
$obj2->setName("Peter");  # set value  1
$obj3->setName("John");   # set value 2
// Output both objects'$name value
echo $obj2->getName();  # display value 1 peter
echo $obj3->getName();  # display value 2 John\

Class SecondClass extends MyClass {
    Public function register(){

    }
}

$newob2 = new SecondClass;
echo $newob2->getName(); #outputs Johnson Didinya

?>