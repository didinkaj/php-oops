<?php
use didinka\Greeting;

require "vendor/autoload.php";


$graetingNew = new Greeting();
echo $graetingNew->run();