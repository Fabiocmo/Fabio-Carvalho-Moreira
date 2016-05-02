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
}