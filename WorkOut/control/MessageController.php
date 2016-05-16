<?php

include_once "model/Request.php";
include_once "model/Message.php";
include_once "database/DatabaseConnector.php";

class MessageController
{
private $requiredParameters = array('id_user_send', 'id_user_receive', 'message');

	public function register($request)
	{
		$params = $request->get_params();
		if ($this->isValid($params)){
		$message = new Message($params["id_user_send"],
							   $params["id_user_receive"],
							   $params["message"]);
				        
		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($message));

	    } else{
		    echo "Erro 400: Bad Request ";
		}
	}

	private function generateInsertQuery($message)
	{
		$query =  "INSERT INTO message (id_user_send, id_user_receive, message) VALUES ('".$message->getIdUserSend()."','".
		                                                                                   $message->getIdUserReceive()."','". 
		                                                                                   $message->getMessage()."')";
							
		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT message FROM message WHERE ".$crit);

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
	
    private function isValid($params)
    {
    	foreach ($params as $key => $value) 
    	{
    		if($value==null)
    		{
    			return false;
    		}
    	}
    	return true;        
    }
}