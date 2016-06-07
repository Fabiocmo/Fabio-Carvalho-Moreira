<?php

include_once "model/Request.php";
include_once "model/Friend.php";
include_once "database/DatabaseConnector.php";

class FriendController
{
	private $requiredParameters = ['id_user', 'id_user_friend'];

	public function register($request)
	{
		
		$params = $request->get_params();
		if ($this->isValidParams($params))
		{
			$friend = new Friend($params["id_user"],
				                 $params["id_user_friend"]);		         
				         
		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");
		$conn = $db->getConnection();		
	    return $conn->query($this->generateInsertQuery($friend));
	    } else
		    {
		    echo "Erro 400";
		    }
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

		$result = $conn->query("SELECT id FROM friend WHERE ".$crit);

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
	
    public function delete($request)
	{
        $params = $request->get_params();
        $db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");
        $conn = $db->getConnection();
        $result = $conn->prepare("DELETE FROM friend WHERE id = ?");
        $result->bindParam(1, $params['id']);
        $result->execute();
        return $result;
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