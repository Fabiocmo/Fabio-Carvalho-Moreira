<?php

include_once "model/Request.php";
include_once "control/UserController.php";
include_once "control/ChartExerciseController.php";
include_once "control/PublicationController.php";
include_once "control/MessageController.php";

class ResourceController
{

	private $controlMap = 
	[
		"user" => "UserController",
		"friend" => "FiendController",		
		"publication" => "PublicationController",
		"chartexercise" => "ChartExerciseController",
		"message" => "MessageController",

	];

	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}
}