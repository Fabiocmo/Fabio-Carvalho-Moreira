<?php

include_once "model/Request.php";
include_once "model/Message.php";
include_once "database/DatabaseConnector.php";

class MessageController
{
	public function register($request)
	{
		$params = $request->get_params();
		$message = new Message($params["message"]);
				        
		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($message));
	}

	private function generateInsertQuery($message)
	{
		$query =  "INSERT INTO message (message) VALUES ('".$message->getMessage()."')";
							
		return $query;						
	}
}