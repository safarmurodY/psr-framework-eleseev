<?php


use Framework\Http\ResponseSender;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\ServerRequestFactory;

chdir(dirname(__DIR__));

require  'vendor/autoload.php';

$request = ServerRequestFactory::fromGlobals();

$name =  $request->getQueryParams()['name'] ?? 'Guest';
//echo 'Hello! ' . $name . ' Yo nigga lang: ';

$response = (new HtmlResponse('Hello ' . $name . '!'))
    ->withHeader('X-Developer', 'ElisDN');

//$response
$emitter = new Sapi();
echo $emitter->send($response) . PHP_EOL;







