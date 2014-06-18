<?php

$app->get('/kashasheiros', function() use ($app){
	
	$kashasheiros = Kashasheiro::all(array('readonly' => true));

    foreach ($kashasheiros as $k){
        $app->response()->write($k->to_json());
    }
});

$app->get('/kashasheiro/:id', function($id) use ($app){
	
	$k = Kashasheiro::find($id);
	$app->response()->write($k->to_json());

});

$app->post('/kashasheiro', function() use ($app){

	$k = new Kashasheiro();
	$k->nickname = $app->request->post('nickname');
	$k->fullname = $app->request->post('fullname');
	$k->email = $app->request->post('email');
    $k->age = $app->request->post('age');
	
    if ($k->is_valid()){
        $k->save();
    }

    else{
        print_r($k->errors->full_messages());
        $app->response->setStatus(400);
    }
});

?>
