<?php

//gotta remember that there won't have any web.config inside sub folders!

$rootFolder = $_SERVER["DOCUMENT_ROOT"];
$projectDir = "$rootFolder/kashasha/service/v1";   //define the directory containing the project files
$rootDir = __DIR__; //because it's placed in the index.php, which is placed in the root

require_once "Slim/Slim.php";		//include the framework in the project
require_once "php-activerecord-1.1.2/ActiveRecord.php";

\Slim\Slim::registerAutoloader();	//register the autoloader

ActiveRecord\Config::initialize(function($cfg)
{
    $connString = FileReader::read();
	$cfg->set_model_directory('models');
	$cfg->set_connections(array('development' => $connString));
});

$app = new \Slim\Slim(); //instantiate a new Framework Object and define the path to the folder that holds the views for this project

require_once "includes.php"; //include the file which contains all the project related includes
require_once "routes.php"; //include the file which contains all the routes/route inclusions

$app->response->headers->set('Content-Type', 'application/json'); //setting to respond always as JSON

$app->run(); //load the application