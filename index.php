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
				            "text"=> "Hello, Welcome to Men Rocks. This is response from Cake Time server."
				        ],
    				    "directives" => [
    				    	[
    				    		"type"=> "Dialog.UpdateDynamicEntities",
		    		            "updateBehavior"=> "REPLACE",
		    		            "types"=> [
		    		                [
		    		                    "name"=> "strikeType",
		    		                    "values"=> [
		    		                        [
		    		                        	"id"=> "1",
		    		                            "name"=> [
		    		                                "value"=> "not punctual",
		    		                                "synonyms"=> [
		    		                                    "not punctual"
		    		                                ]
		    		                            ]
		    		                        ],
		    		                        [
		    		                        	"id"=> "2",
		    		                            "name"=> [
		    		                                "value"=> "high absenteism",
		    		                                "synonyms"=> [
		    		                                    "high absenteism"
		    		                                ]
		    		                            ]
		    		                        ],
		    		                        [
		    		                        	"id"=> "3",
		    		                            "name"=> [
		    		                                "value"=> "data mistakes",
		    		                                "synonyms"=> [
		    		                                    "data mistakes"
		    		                                ]
		    		                            ]
		    		                        ],
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
	else if ($jsonDataAsArray['request']['type'] == 'IntentRequest')
	{
		if ($jsonDataAsArray['request']['intent']['name'] == 'assignStrikePoints')
		{


			$slotValues = $jsonDataAsArray['request']['intent']['slots'];
			$strikeType = '';
			$username = '';
			$userId = '';
			if(isset($slotValues['strikeType']['value']) && $slotValues['strikeType']['value'] != 'NULL')
			{
				$strikeType = $slotValues['strikeType']['value'];
			}
			else if(isset($jsonDataAsArray['session']['attributes']['strikeType']) && $jsonDataAsArray['session']['attributes']['strikeType']){
				$strikeType = $jsonDataAsArray['session']['attributes']['strikeType'];
			}

			if(isset($slotValues['username']['value']) && $slotValues['username']['value'] != 'NULL')
			{
				$username = $slotValues['username']['value'];
			}
			else if(isset($jsonDataAsArray['session']['attributes']['username']) && $jsonDataAsArray['session']['attributes']['username']){
				$username = $jsonDataAsArray['session']['attributes']['username'];
			}

			if(isset($slotValues['userId']['value']) && $slotValues['userId']['value'] != 'NULL')
			{
				$userId = $slotValues['userId']['value'];
			}
			else if(isset($jsonDataAsArray['session']['attributes']['userId']) && $jsonDataAsArray['session']['attributes']['userId']){
				$userId = $jsonDataAsArray['session']['attributes']['userId'];
			}



			$speakout = 'strike type is '.$strikeType.' user name is '.$username.' user id is '.$userId;

			$response = [
					    "version"=> "1.0",
					    "sessionAttributes"=> [],
					    "response"=> [
					        "outputSpeech"=> [
					            "type"=> "PlainText",
					            "text"=> $speakout
					        ],
					        "card"=> null,
					        "shouldEndSession"=> false
					    ],
				        "sessionAttributes"=> [
				        	'strikeType' => $strikeType,
				        	'username' => $username,
				        	'userId' => $userId
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
