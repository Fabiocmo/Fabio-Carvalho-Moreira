<?php

include_once "model/Request.php";
include_once "model/Friend.php";
include_once "database/DatabaseConnector.php";

class FriendController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["name"],
				         $params["last_name"],			         
				         $params["email"]);

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($user));
	}

	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO friend (name, last_name, email) VALUES ('".$user->getName()."','".
					$user->getLastName()."','".
					$user->getEmail()."')";								

		return $query;						
	}
}