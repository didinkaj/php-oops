<?php
use didinka\DbConnection;

require "vendor/autoload.php";


$graetingNew =  new DbConnection;
$graetingNew->testConnection();