<?php

class ChartExercise
{
	private $email;
	private $expire_date;
	private $chart_exercise;
		
	public function __construct($email, $expire_date, $chart_exercise)
	{
		$this->email = $email;
		$this->expire_date = $expire_date;
		$this->chart_exercise = $chart_exercise;
		
	}
	public function getEmail()
	{
		return $this->email;
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