<?php

use Framework\Http\Request;

chdir(dirname(__DIR__));

require  'vendor/autoload.php';

$request = new Request();

//$name =  $_GET['name'] ?? 'Guest';
$name =  $request->getQueryParams()['name'] ?? 'Guest';


header('X-Developer: Safarmurod');
echo 'Hello! ' . $name . ' Yo nigga lang: ';