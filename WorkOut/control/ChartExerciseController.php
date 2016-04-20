<?php

include_once "model/Request.php";
include_once "model/ChartExercise.php";

class ChartExerciseController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["name"],
				 $params["expire_date"],
				 $params["id_chart_exercise"];
				 
		return var_dump($user);
	}
}