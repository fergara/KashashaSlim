<?php

$app->get('/cities', function() use ($app){
	
    $cities = City::all(array('readonly' => true, 'limit' => 50));

    foreach ($cities as $k){
        $app->response()->write($k->to_json());
    }
});

$app->get('/city/:id', function($id) use ($app){
	
	$city = City::find($id);
	
	$app->response()->write($city->to_json());
});

$app->post('/city', function() use ($app){
	$city = new City();
	$city->name = ($app->request->post('name') !== null) ? $app->request->post('name') : '';
	$city->state = ($app->request->post('state') !== null) ? $app->request->post('state') : '';
	
	print_r($city);
	
	$city->save();
});