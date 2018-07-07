<?php


interface Human
{
    function breath();

    function eat();
}

class Person implements Human
{
    function sleep()
    {
        echo "man sleepin";
    }


    function breath()
    {
        echo "man is breathing";
    }

    function eat()
    {
        echo "man is easting";
    }

}

$obj = new Person();

