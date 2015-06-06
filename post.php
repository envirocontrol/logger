<?php

$m = new MongoClient() ;

$db = $m->envirocontrol ;

$collection = $db->log_entries ;

// TODO: Get JSON and parse

$time = new MongoDate() ;
//$document = array( "id" => $id, "temperature" => temperature , "humidity" => $humidity, "time" => $time ) ;
$document = array( "test" => "succeeded" ) ;
$collection->insert($document) ;

// TODO: Create response json

// TODO: Return json


?>