<?php

include_once "model/Request.php";
include_once "model/Publication.php";
include_once "database/DatabaseConnector.php";

class PublicationController
{
	private $requiredParameters = ['id_user', 'datee', 'hour', 'publication'];

	public function register($request)
	{
		$params = $request->get_params();
		if ($this->isValidParams($params))
		{
		$publication = new User($params["id_user"],
				         $params["datee"],
				         $params["hour"],
				         $params["publication"]);
			        	 	


		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");
		$conn = $db->getConnection();		
	    return $conn->query($this->generateInsertQuery($publication));
	
		} else
		    {
		    echo "Erro 400: Bad Request ";
		    }
		
	}

	private function generateInsertQuery($publication)
	{
		
		$query =  "INSERT INTO publication (name, last_name, email, birthdate, phone, pass) VALUES ('".$publication->getIUser()."','".
					$publication->getDate()."','".
					$publication->getHour()."','".
					$publication->getPublication()."')";
					
		//print_r(mysql_insert_id())
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
        return "UPDATE publication SET " . $crit . " WHERE id = '" . $params["id"] . "'";
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

    public function delete($request)
	{
        $params = $request->get_params();
        $db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");
        $conn = $db->getConnection();
        $result = $conn->prepare("DELETE FROM publication WHERE id = ?");
        $result->bindParam(1, $params['id']);
        $result->execute();
        return $result;
    }

    private function isValidKeys($params)
    {
        $keys = array_keys($params);
        $diff1 = array_diff($keys, $this->requiredParameters);
        $diff2 = array_diff($this->requiredParameters, $keys);

        if (empty($diff2) && empty($diff1))
			return true;

            return false;
    }	
}