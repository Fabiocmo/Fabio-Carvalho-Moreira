<?php

class ChartExercise
{
	private $email;
	private $expire_date;
	private $chart_exercise;
	private $segunda_feira;
	private $terca_feira;
	private $quarta_feira;
	private $quinta_feira;
	private $sexta_feira;
	private $sabado;
		
	public function __construct($email, $expire_date, $chart_exercise, $segunda_feira, $terca_feira, $quarta_feira, $quinta_feira, $sexta_feira, $sabado)
	{
		$this->email = $email;
		$this->expire_date = $expire_date;
		$this->chart_exercise = $chart_exercise;
		$this->segunda_feira = $segunda_feira;
		$this->terca_feira = $terca_feira;
		$this->quarta_feira = $quarta_feira;
		$this->quinta_feira = $quinta_feira;
		$this->sexta_feira = $sexta_feira;
		$this->sabado = $sabado;
		
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
	public function getSegundaFeira()
	{
		return $this->segunda_feira;
	}
	public function getTercaFeira()
	{
		return $this->terca_feira;
	}
	public function getQuartaFeira()
	{
		return $this->quarta_feira;
	}
	public function getQuintaFeira()
	{
		return $this->quinta_feira;
	}
	public function getSextaFeira()
	{
		return $this->sexta_feira;
	}
	public function getSabado()
	{
		return $this->sabado;
	}
}