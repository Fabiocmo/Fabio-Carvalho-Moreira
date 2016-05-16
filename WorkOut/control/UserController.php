<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{
	private $requiredParameters = ['name', 'last_name', 'email', 'birthdate', 'phone', 'pass'];

	public function register($request)
	{
		$params = $request->get_params();
		if ($this->isValid($params))
		{
		$user = new User($params["name"],
				         $params["last_name"],
				         $params["email"],
				         $params["birthdate"],
			        	 $params["phone"],
				         $params["pass"]);		


		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");
		$conn = $db->getConnection();		
	    return $conn->query($this->generateInsertQuery($user));
	
		} else
		    {
		    echo "Erro 400: Bad Request ";
		    }
		
	}

	private function generateInsertQuery($user)
	{
		
		$query =  "INSERT INTO user (name, last_name, email, birthdate, phone, pass) VALUES ('".$user->getName()."','".
					$user->getLastName()."','".
					$user->getEmail()."','".
					$user->getBirthdate()."','".
					$user->getPhone()."','". 
					$user->getPassword()."')";
				
		//print_r(mysql_insert_id())
		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT name, last_name, email, birthdate, phone FROM user WHERE ".$crit);

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