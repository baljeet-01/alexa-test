<?php
// use MaxBeckers\AmazonAlexa\Helper\ResponseHelper;
// use MaxBeckers\AmazonAlexa\Request\Request;
// use MaxBeckers\AmazonAlexa\RequestHandler\Basic\HelpRequestHandler;
// use MaxBeckers\AmazonAlexa\RequestHandler\RequestHandlerRegistry;
// use MaxBeckers\AmazonAlexa\Validation\RequestValidator;
use \Alexa\Request\LaunchRequest;

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

$jsonDataAsArray=json_decode(file_get_contents("php://input"),true);
if ($jsonDataAsArray) {			

	if ($jsonDataAsArray['request']['type'] == 'LaunchRequest') {
		// Handle intent here
		$response = [
				    "version"=> "1.0",
				    "sessionAttributes"=> [],
				    "response"=> [
				        "outputSpeech"=> [
				            "type"=> "PlainText",
				            "text"=> "Hello, Welcome to Men Rocks. What would you like me to do? you can try saying check inventory for an item."
				        ],
				        "card"=> null,
				        "shouldEndSession"=> false
				    ]
				];
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	else if ($jsonDataAsArray['request']['type'] == 'IntentRequest'){
		$response = [
				    "version"=> "1.0",
				    "sessionAttributes"=> [],
				    "response"=> [
				        "outputSpeech"=> [
				            "type"=> "PlainText",
				            "text"=> "I'm your response message"
				        ],
				        "card"=> null,
				        "shouldEndSession"=> false
				    ]
				];
		header('Content-Type: application/json');
		echo json_encode($response);
	}
} 
else {
	$response = [
				    "version"=> "1.0",
				    "sessionAttributes"=> [],
				    "response"=> [
				        "outputSpeech"=> [
				            "type"=> "PlainText",
				            "text"=> "I am not sure how to respond to that. Can you please try again?"
				        ],
				        "card"=> null
				    ]
				];
	header('Content-Type: application/json');
	echo json_encode($response);
}

exit();
