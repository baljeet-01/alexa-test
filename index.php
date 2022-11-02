<?php
//   Set the correct header for JSON data
header('Content-Type: application/json');
//   Set the response
$response = [
  "response" => [
    "outputSpeech" => [
      "type" => "PlainText",
      "text" => "I'm a little teapot"
    ]
  ]
];
echo json_encode($response);