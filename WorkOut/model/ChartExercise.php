<?php

class ChartExercise
{
	private $name;
	private $expire_date;
	private $id_chart_exercise;
	
	public function __construct($name, $expire_date,
	$id_chart_exercise)
	{
		$this->name = $name;
		$this->expire_date = $expire_date;
		$this->id_chart_exercise = $id_chart_exercise;
	}

}