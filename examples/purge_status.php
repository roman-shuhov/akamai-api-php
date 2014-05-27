<?php

require_once '../vendor/autoload.php';

$api = new \Akamai\CCU\API('<your-login>', '<your-password>');

// get progress uri value from Purge request
$response = $api->status('<progress-uri>');

var_dump($response);

/*
 === Output ===

object(Akamai\CCU\Response\Status)#4 (12) {
  ["originalEstimatedSeconds"]=>
  int(420)
  ["progressUri"]=>
  string(51) "<progress-uri>"
  ["originalQueueLength"]=>
  int(0)
  ["purgeId"]=>
  string(36) "<purge-id>"
  ["supportId"]=>
  string(30) "<support-id>"
  ["completionTime"]=>
  NULL
  ["submittedBy"]=>
  string(21) "<your-login>"
  ["purgeStatus"]=>
  string(11) "In-Progress"
  ["submissionTime"]=>
  string(20) "2014-05-27T00:53:16Z"
  ["pingAfterSeconds"]=>
  int(60)
  ["httpStatus"]=>
  int(200)
  ["unknownFields"]=>
  array(0) {
  }
}

*/