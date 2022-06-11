<?php


use Framework\Http\ResponseSender;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequestFactory;

chdir(dirname(__DIR__));

require  'vendor/autoload.php';

$request = ServerRequestFactory::fromGlobals();

$name =  $request->getQueryParams()['name'] ?? 'Guest';
//echo 'Hello! ' . $name . ' Yo nigga lang: ';

$response = (new HtmlResponse('Hello ' . $name . '!!'))
    ->withHeader('X-Developer', 'ElisDN');

//$response
$emitter = new \Laminas\HttpHandlerRunner\Emitter\SapiEmitter();
echo $emitter->emit($response);







