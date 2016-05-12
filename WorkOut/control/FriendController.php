<?php

include_once "model/Request.php";
include_once "model/Friend.php";
include_once "database/DatabaseConnector.php";

class FriendController
{
	public function register($request)
	{
		$params = $request->get_params();
		$friend = new Friend($params["id_user"],
				             $params["id_user_friend"]);		         
				         
		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($friend));
	}

	private function generateInsertQuery($friend)
	{
		$query =  "INSERT INTO friend (id_user, id_user_friend) VALUES ('".$friend->getIdUser()."','".
					                                                       $friend->getIdUserFriend()."')";								

		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT id_friend FROM friend WHERE ".$crit);

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