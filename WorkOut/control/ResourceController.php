<?php

include_once "model/Request.php";
include_once "control/UserController.php";
include_once "control/ChartExerciseController.php";
include_once "control/PublicationController.php";
include_once "control/MessageController.php";
include_once "control/FriendController.php";

class ResourceController
{

	private $controlMap = 
	[
		"user" => "UserController",
		"friend" => "FriendController",		
		"publication" => "PublicationController",
		"chartexercise" => "ChartExerciseController",
		"message" => "MessageController",

	];

	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);		
	}

	public function searchResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->search($request);
	}
		
	public function updateResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->update($request);
	}

	public function deleteResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->delete($request);
	}
	
}