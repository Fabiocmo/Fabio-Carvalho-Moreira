<?php

include_once "model/Request.php";
include_once "model/ChartExercise.php";
include_once "database/DatabaseConnector.php";

class ChartExerciseController
{
	public function register($request)
	{
		$params = $request->get_params();
		$chartexercise = new ChartExercise ($params["name"],				         
				                            $params["expire_date"],
				                            $params["chart_exercise"]);				         

		$db = new DatabaseConnector("localhost", "workout", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($chartexercise));
	}

	private function generateInsertQuery($chartexercise)
	{
		$query =  "INSERT INTO chartexercise (name, expire_date, chart_exercise) VALUES ('".$chartexercise->getName()."','".
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
}