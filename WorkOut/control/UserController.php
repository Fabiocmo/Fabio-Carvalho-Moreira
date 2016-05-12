<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["name"],
				         $params["last_name"],
				         $params["email"],
				         $params["birthdate"],
			        	 $params["phone"],
				         $params["login"],
				         $params["pass"]);

		if ($this->isValid($user)==1){
			
		

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($user));
	}
	else return "esta faltando algum dado";
		return var_dump($user);
    }

	private function generateInsertQuery($user)
	{
		
		$query =  "INSERT INTO user (name, last_name, email, birthdate, phone, login, pass) VALUES ('".$user->getName()."','".
					$user->getLastName()."','".
					$user->getEmail()."','".
					$user->getBirthdate()."','".
					$user->getPhone()."','". 
					$user->getLogin()."','". 
					$user->getPassword()."')";
				

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

	private function isValid($user)
	{
		
		if($user->getName()==null){
			return 0;
		}
		if($user->getLastName()==null){
			return 0;
		}
		if($user->getEmail()==null){
			return 0;
		}
		if($user->getBirthdate()==null){
			return 0;
		}
		if($user->getPhone()==null){
			return 0;
		}
		if($user->getLogin()==null){
			return 0;
		}
		
		if($user->getPassword()==null){
			return 0;
		}
		else
			return 1;
	}
}