<?php

$app->get('/bars', function() use ($app){

	$bars = Bar::all(array('readonly' => true));

    foreach ($bars as $k){
        $app->response()->write($k->to_json());
    }	
});

?>