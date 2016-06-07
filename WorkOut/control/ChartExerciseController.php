<?php

include_once "model/Request.php";
include_once "model/ChartExercise.php";
include_once "database/DatabaseConnector.php";

class ChartExerciseController
{
	private $requiredParameters = ['email', 'expire_date', 'chart_exercise'];

	public function register($request)
	{
		$params = $request->get_params();
		if ($this->isValidParams($params))
		{
		$chartexercise = new ChartExercise ($params["email"],				         
				                            $params["expire_date"],
				                            $params["chart_exercise"]);				         

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($chartexercise));

		} else{
		    echo "Erro 400: Bad Request";
		}
	}

	private function generateInsertQuery($chartexercise)
	{
		$query =  "INSERT INTO chartexercise (email, expire_date, chart_exercise) VALUES ('".$chartexercise->getEmail()."','".
                                                                                            $chartexercise->getExpireDate()."','".
		                                                                                    $chartexercise->getChartExercise()."')";

		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT chart_exercise FROM chartexercise WHERE ".$crit);

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
        return "UPDATE chartexercise SET " . $crit . " WHERE id = '" . $params["id"] . "'";
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
        $result = $conn->prepare("DELETE FROM chartexercise WHERE id = ?");
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