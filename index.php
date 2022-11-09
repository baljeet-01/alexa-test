<?php
// use MaxBeckers\AmazonAlexa\Helper\ResponseHelper;
// use MaxBeckers\AmazonAlexa\Request\Request;
// use MaxBeckers\AmazonAlexa\RequestHandler\Basic\HelpRequestHandler;
// use MaxBeckers\AmazonAlexa\RequestHandler\RequestHandlerRegistry;
// use MaxBeckers\AmazonAlexa\Validation\RequestValidator;
use \Alexa\Request\LaunchRequest;

require 'vendor/autoload.php';
require 'handler.php';
session_start();
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
				            "text"=> "Hello, Welcome to Men Rocks. This is response from Cake Time server."
				        ],
    				    "directives" => [
    				    	[
    				    		"type"=> "Dialog.UpdateDynamicEntities",
		    		            "updateBehavior"=> "REPLACE",
		    		            "types"=> [
		    		                [
		    		                    "name"=> "secretType",
		    		                    "values"=> [
		    		                        [
		    		                            "id"=> "1",
		    		                            "name"=> [
		    		                                "value"=> "Logan International Airport",
		    		                                "synonyms"=> [
		    		                                    "Boston Logan"
		    		                                ]
		    		                            ]
		    		                        ],
		    		                        [
		    		                            "id"=> "2",
		    		                            "name"=> [
		    		                                "value"=> "LaGuardia Airport",
		    		                                "synonyms"=> [
		    		                                    "New York"
		    		                                ]
		    		                            ]
		    		                        ]
		    		                    ]
		    		                ]
		    		            ]
    				    	]
    				    ],
				        "card"=> null,
				        "shouldEndSession"=> false
				    ]
				];
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	else if ($jsonDataAsArray['request']['type'] == 'IntentRequest'){
		if ($jsonDataAsArray['request']['intent']['name'] == 'assignStrikePoints') {


			$slotValues = $jsonDataAsArray['request']['intent']['slots'];

			if(isset($slotValues['strikeType']['value']) && $slotValues['strikeType']['value'] != 'NULL')
			{
				$_SESSION['strikeType'] = $slotValues['strikeType']['value'];
			}

			if(isset($slotValues['username']['value']) && $slotValues['username']['value'] != 'NULL')
			{
				$_SESSION['username'] = $slotValues['username']['value'];
			}

			if(isset($slotValues['userId']['value']) && $slotValues['userId']['value'] != 'NULL')
			{
				$_SESSION['userId'] = $slotValues['userId']['value'];
			}

			$strikeType = isset($_SESSION['strikeType'])? $_SESSION['strikeType'] : false;
			$username = isset($_SESSION['username'])? $_SESSION['username'] : false;
			$userId = isset($_SESSION['userId'])? $_SESSION['userId'] : false;

			$speakout = 'strike type is '.$strikeType.' user name is '.$username.' user id is '.$userId;

			$response = [
					    "version"=> "1.0",
					    "sessionAttributes"=> [],
					    "response"=> [
					        "outputSpeech"=> [
					            "type"=> "PlainText",
					            "text"=> $speakout
					        ],
					        "card"=> null
					    ]
					];			
		}
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
