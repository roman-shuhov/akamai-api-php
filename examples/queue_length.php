<?php

require_once '../vendor/autoload.php';

$api = new \Akamai\CCU\API('<your-login>', '<your-password>');

$response = $api->length();

var_dump($response);

/*
 === Output ===

object(Akamai\CCU\Response\Length)#4 (5) {
  ["queueLength"]=>
  int(0)
  ["detail"]=>
  string(63) "The queue may take a minute to reflect new or removed requests."
  ["supportId"]=>
  string(30) "<support-id>"
  ["httpStatus"]=>
  int(200)
  ["unknownFields"]=>
  array(0) {
  }
}

*/