<?php

$app->get('/scores', function() use ($app){
	
	$scores = Score::all(array('readonly' => true));

    foreach ($scores as $s){
        $app->response()->write($s->to_json());
    }
});

$app->get('/score/:kashasheiro_id', function($kashasheiro_id) use ($app){
	
	$scores = Score::find_all_by_kashasheiro_id($kashasheiro_id);
	
    foreach ($scores as $score){
        $app->response()->write($score->kashasheiro->to_json());
    }

});

$app->post('/score', function() use ($app){

	$s = new Score();
	$k->score = $app->request->post('score');
	$k->kashasha_id = $app->request->post('kashasha_id');
    $k->kashasheiro_id = $app->request->post('kashasheiro_id');
	
    if ($k->is_valid()){
        $k->save();
    }

    else{
        print_r($k->errors->full_messages());
        $app->response->setStatus(400);
    }

});

?>
