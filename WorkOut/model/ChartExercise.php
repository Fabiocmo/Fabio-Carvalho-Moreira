<?php

class ChartExercise
{
	private $name;
	private $expire_date;
	private $chart_exercise;
		
	public function __construct($name, $expire_date, $chart_exercise)
	{
		$this->name = $name;
		$this->expire_date = $expire_date;
		$this->chart_exercise = $chart_exercise;
		
	}
	public function getName()
	{
		return $this->name;
	}
	public function getExpireDate()
	{
		return $this->expire_date;
	}
	public function getChartExercise()
	{
		return $this->chart_exercise;
	}
}