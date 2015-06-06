<?php

$m = new MongoClient() ;

$db = $m->envirocontrol ;

$collection = $db->log_entries ;

$json = $_POST["json"] ;

echo $json ;

$time = new MongoDate() ;
//$document = array( "id" => $id, "temperature" => temperature , "humidity" => $humidity, "time" => $time ) ;
//$collection->insert($document) ;

// TODO: Create response json

// TODO: Return json


?>