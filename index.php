<?php
// use MaxBeckers\AmazonAlexa\Helper\ResponseHelper;
// use MaxBeckers\AmazonAlexa\Request\Request;
// use MaxBeckers\AmazonAlexa\RequestHandler\Basic\HelpRequestHandler;
// use MaxBeckers\AmazonAlexa\RequestHandler\RequestHandlerRegistry;
// use MaxBeckers\AmazonAlexa\Validation\RequestValidator;

require 'vendor/autoload.php';
require 'handler.php';

/**
 * Simple example for request handling workflow with help example
 * loading json
 * creating request
 * validating request
 * adding request handler to registry
 * handling request
 * returning json response
 */

$jsonDataAsArray = json_decode($_REQUEST['request']);
if ($jsonDataAsArray) {
	$alexaRequest = \Alexa\Request\Request::fromData($jsonDataAsArray);
	$response = new \Alexa\Response\Response;
	$response->respond('I\'m your response message');
	header('Content-Type: application/json');
	echo json_encode($response->render());
} else {
    http_response_code(400);
}

exit();