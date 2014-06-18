<?php

$app->get('/kashashas', function() use ($app){
	
	$kashashas = Kashasha::all(array('readonly' => true));

    foreach ($kashashas as $k){
        $app->response()->write($k->to_json());
    }
});

$app->get('/kashasha/:id', function($id) use ($app){
	
	$k = Kashasha::find($id);
	$app->response()->write($k->to_json());

});

$app->post('/kashasha', function() use ($app){

	$k = new Kashasha();
	$k->popularname = $app->request->post('popularname');
	$k->realname = $app->request->post('realname');
	$k->manufacturer = $app->request->post('manufacturer');
    $k->cityname = $app->request->post('cityname');
	
    if ($k->is_valid()){
        $k->save();
    }
    else{
        print_r($k->errors->full_messages());
        $app->response->setStatus(400);
    }
});

$app->post('/kashasha/upload', function(){

	if (is_uploaded_file($_FILES['imgupload']['tmp_name']) && $_FILES['imgupload']['type'] == "image/jpeg") {
        
        $filename = getcwd() . '/uploads/' . uniqid() . '.jpeg';
        
        if (move_uploaded_file($_FILES['imgupload']['tmp_name'], $filename)){
            //get filename and update db
        }
        else{
            echo "Error when moving file to /uploads folder!";
        }
    }
});

?>
