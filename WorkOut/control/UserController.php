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
		if ($this->isValidParams($params))
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
		    echo "Erro 400";
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

	public function update($request)
    {
        $params = $request->get_params();
        $db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");
        $conn = $db->getConnection();
        return $conn->query($this->generateUpdateQuery($params));
    }

    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);
        return "UPDATE user SET " . $crit . " WHERE id = '" . $params["id"] . "'";
    }

    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }
        return substr($criteria, 0, -2);
    }

    private function isValidParams($params)
    {
        $keys = array_keys($params);
        $diff1 = array_diff($keys, $this->requiredParameters);
        $diff2 = array_diff($this->requiredParameters, $keys);

        if (empty($diff2) && empty($diff1))
			return true;

            return false;
    }   	
}