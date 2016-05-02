<?php

include_once "model/Request.php";
include_once "model/Publication.php";
include_once "database/DatabaseConnector.php";

class PublicationController
{
	public function register($request)
	{
		$params = $request->get_params();
		$publication = new Publication($params["publication"]);
				                				           
	$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($publication));
	}

	private function generateInsertQuery($publication)
	{
		$query =  "INSERT INTO publication (publication) VALUES ('".$publication->getPublication()."')";
					
		return $query;						
	}
}	