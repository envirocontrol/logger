<?php

$m = new MongoClient('mongodb://localhost/') ;

$db = $m->envirocontrol ;

$collection = $db->log_entries ;

$json =  json_decode($_POST["json"]);

$time = new MongoDate() ;
$document = array( "id" => $json->{'id'}, "temperature" => $json->{'temperature'} , "humidity" => $json->{'humidity'} , "time" => $time ) ;
$collection->insert($document) ;

$json = json_encode ( array ( 'status' => 'OK' ) ) ;
echo $json


?>
