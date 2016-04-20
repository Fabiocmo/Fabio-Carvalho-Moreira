<?php

include_once "model/Request.php";
include_once "control/UserController.php";

class ResourceController
{

	private $controlMap = 
	[
		"user" => "UserController",
		"friend" => "FiendController",
		"searchuser" => "SearchUserController",
		"publication" => "PublicationController",
		"chartexercise" => "ChartExerciseController",

	];

	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}
}