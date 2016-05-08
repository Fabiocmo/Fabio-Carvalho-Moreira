<?php

include_once "model/Request.php";
include_once "model/Publication.php";
include_once "database/DatabaseConnector.php";

class PublicationController
{
	public function register($request)
	{
		$params = $request->get_params();
		$publication = new Publication($params["id_user"],
										$params["datee"],
										$params["hour"],
										$params["publication"]);
				                				           
	$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($publication));
	}

	private function generateInsertQuery($publication)
	{
		$query =  "INSERT INTO publication (id_user, datee, hour, publication) VALUES ('".$publication->getIdUser()."','".
		                                                                                   $publication->getDate()."','".
		                                                                                   $publication->getHour()."','".
		                                                                                   $publication->getPublication()."')";
					
		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT publication FROM publication WHERE ".$crit);

		//foreach($result as $row) 

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}

	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}

		return substr($criteria, 0, -4);	
	}
}	