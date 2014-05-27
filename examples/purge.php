<?php

require_once '../vendor/autoload.php';

$api = new \Akamai\CCU\API('<your-login>', '<your-password>');

$response = $api->purge('<your-website>');

var_dump($response);

/*
 === Output ===

 object(Akamai\CCU\Response\Purge)#5 (10) {
  ["detail"]=>
  string(17) "Request accepted."
  ["estimatedSeconds"]=>
  int(420)
  ["purgeId"]=>
  string(36) "<purge-id>"
  ["progressUri"]=>
  string(51) "/ccu/v2/purges/<purge-id>"
  ["pingAfterSeconds"]=>
  int(420)
  ["supportId"]=>
  string(30) "<support-id"
  ["title"]=>
  NULL
  ["describedBy"]=>
  NULL
  ["httpStatus"]=>
  int(201)
  ["unknownFields"]=>
  array(0) {
  }
}

*/